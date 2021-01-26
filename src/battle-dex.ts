/**
 * Pokemon Showdown Dex
 *
 * Roughly equivalent to sim/dex.js in a Pokemon Showdown server, but
 * designed for use in browsers rather than in Node.
 *
 * This is a generic utility library for Pokemon Showdown code: any
 * code shared between the replay viewer and the client usually ends up
 * here.
 *
 * Licensing note: PS's client has complicated licensing:
 * - The client as a whole is AGPLv3
 * - The battle replay/animation engine (battle-*.ts) by itself is MIT
 *
 * Compiled into battledata.js which includes all dependencies
 *
 * @author Guangcong Luo <guangcongluo@gmail.com>
 * @license MIT
 */

declare var require: any;
declare var global: any;

if (typeof window === 'undefined') {
	// Node
	(global as any).window = global;
} else {
	// browser (possibly NW.js!)
	window.exports = window;
}

// @ts-ignore
window.nodewebkit = !!(typeof process !== 'undefined' && process.versions && process.versions['node-webkit']);

function toID(text: any) {
	if (text?.id) {
		text = text.id;
	} else if (text?.userid) {
		text = text.userid;
	}
	if (typeof text !== 'string' && typeof text !== 'number') return '' as ID;
	return ('' + text).toLowerCase().replace(/[^a-z0-9]+/g, '') as ID;
}

function toUserid(text: any) {
	return toID(text);
}

type Comparable = number | string | boolean | Comparable[] | {reverse: Comparable};
const PSUtils = new class {
	/**
	 * Like string.split(delimiter), but only recognizes the first `limit`
	 * delimiters (default 1).
	 *
	 * `"1 2 3 4".split(" ", 2) => ["1", "2"]`
	 *
	 * `splitFirst("1 2 3 4", " ", 1) => ["1", "2 3 4"]`
	 *
	 * Returns an array of length exactly limit + 1.
	 */
	splitFirst(str: string, delimiter: string, limit: number = 1) {
		let splitStr: string[] = [];
		while (splitStr.length < limit) {
			let delimiterIndex = str.indexOf(delimiter);
			if (delimiterIndex >= 0) {
				splitStr.push(str.slice(0, delimiterIndex));
				str = str.slice(delimiterIndex + delimiter.length);
			} else {
				splitStr.push(str);
				str = '';
			}
		}
		splitStr.push(str);
		return splitStr;
	}

	/**
	 * Compares two variables; intended to be used as a smarter comparator.
	 * The two variables must be the same type (TypeScript will not check this).
	 *
	 * - Numbers are sorted low-to-high, use `-val` to reverse
	 * - Strings are sorted A to Z case-semi-insensitively, use `{reverse: val}` to reverse
	 * - Booleans are sorted true-first (REVERSE of casting to numbers), use `!val` to reverse
	 * - Arrays are sorted lexically in the order of their elements
	 *
	 * In other words: `[num, str]` will be sorted A to Z, `[num, {reverse: str}]` will be sorted Z to A.
	 */
	compare(a: Comparable, b: Comparable): number {
		if (typeof a === 'number') {
			return a - (b as number);
		}
		if (typeof a === 'string') {
			return a.localeCompare(b as string);
		}
		if (typeof a === 'boolean') {
			return (a ? 1 : 2) - (b ? 1 : 2);
		}
		if (Array.isArray(a)) {
			for (let i = 0; i < a.length; i++) {
				const comparison = PSUtils.compare(a[i], (b as Comparable[])[i]);
				if (comparison) return comparison;
			}
			return 0;
		}
		if (a.reverse) {
			return PSUtils.compare((b as {reverse: string}).reverse, a.reverse);
		}
		throw new Error(`Passed value ${a} is not comparable`);
	}
	/**
	 * Sorts an array according to the callback's output on its elements.
	 *
	 * The callback's output is compared according to `PSUtils.compare` (in
	 * particular, it supports arrays so you can sort by multiple things).
	 */
	sortBy<T>(array: T[], callback: (a: T) => Comparable): T[];
	/**
	 * Sorts an array according to `PSUtils.compare`. (Correctly sorts numbers,
	 * unlike `array.sort`)
	 */
	sortBy<T extends Comparable>(array: T[]): T[];
	sortBy<T>(array: T[], callback?: (a: T) => Comparable) {
		if (!callback) return (array as any[]).sort(PSUtils.compare);
		return array.sort((a, b) => PSUtils.compare(callback(a), callback(b)));
	}
};

/**
 * Sanitize a room ID by removing anything that isn't alphanumeric or `-`.
 * Shouldn't actually do anything except against malicious input.
 */
function toRoomid(roomid: string) {
	return roomid.replace(/[^a-zA-Z0-9-]+/g, '').toLowerCase();
}

function toName(name: any) {
	if (typeof name !== 'string' && typeof name !== 'number') return '';
	name = ('' + name).replace(/[\|\s\[\]\,\u202e]+/g, ' ').trim();
	if (name.length > 18) name = name.substr(0, 18).trim();

	// remove zalgo
	name = name.replace(
		/[\u0300-\u036f\u0483-\u0489\u0610-\u0615\u064B-\u065F\u0670\u06D6-\u06DC\u06DF-\u06ED\u0E31\u0E34-\u0E3A\u0E47-\u0E4E]{3,}/g,
		''
	);
	name = name.replace(/[\u239b-\u23b9]/g, '');

	return name;
}

interface SpriteData {
	w: number;
	h: number;
	y?: number;
	gen?: number;
	url?: string;
	rawHTML?: string;
	pixelated?: boolean;
	isFrontSprite?: boolean;
	cryurl?: string;
	shiny?: boolean;
}

interface TeambuilderSpriteData {
	x: number;
	y: number;
	spriteDir: string;
	spriteid: string;
	shiny?: boolean;
}

const Dex = new class implements ModdedDex {
	readonly gen = 8;
	readonly modid = 'gen8' as ID;
	readonly cache = null!;

	readonly statNames: ReadonlyArray<StatName> = ['hp', 'atk', 'def', 'spa', 'spd', 'spe'];
	readonly statNamesExceptHP: ReadonlyArray<StatNameExceptHP> = ['atk', 'def', 'spa', 'spd', 'spe'];

	pokeballs: string[] | null = null;

	readonly modResourcePrefix = 'https://raw.githubusercontent.com/scoopapa/dh/master/data/mods/';
	resourcePrefix = (() => {
		let prefix = '';
		if (window.document?.location?.protocol !== 'http:') prefix = 'https:';
		return `${prefix}//${'play.pokemonshowdown.com'}/`;
	})();

	fxPrefix = (() => {
		if (window.document?.location?.protocol === 'file:') {
			if (window.Replays) return `https://${'play.pokemonshowdown.com'}/fx/`;
			return `fx/`;
		}
		return `//${'play.pokemonshowdown.com'}/fx/`;
	})();

	loadedSpriteData = {xy: 1, bw: 0};
	moddedDexes: {[mod: string]: ModdedDex} = {};

	mod(modid: ID): ModdedDex {
		if (modid === 'gen8') return this;
		if (!window.BattleTeambuilderTable) return this;
		if (modid in this.moddedDexes) {
			return this.moddedDexes[modid];
		}
		this.moddedDexes[modid] = new ModdedDex(modid);
		return this.moddedDexes[modid];
	}
	forGen(gen: number) {
		if (!gen) return this;
		return this.mod(`gen${gen}` as ID);
	}

	resolveAvatar(avatar: string): string {
		if (window.BattleAvatarNumbers && avatar in BattleAvatarNumbers) {
			avatar = BattleAvatarNumbers[avatar];
		}
		if (avatar.charAt(0) === '#') {
			return Dex.resourcePrefix + 'sprites/trainers-custom/' + toID(avatar.substr(1)) + '.png';
		}
		if (avatar.includes('.') && window.Config?.server?.registered) {
			// custom avatar served by the server
			let protocol = (Config.server.port === 443) ? 'https' : 'http';
			return protocol + '://' + Config.server.host + ':' + Config.server.port +
				'/avatars/' + encodeURIComponent(avatar).replace(/\%3F/g, '?');
		}
		return Dex.resourcePrefix + 'sprites/trainers/' + Dex.sanitizeName(avatar || 'unknown') + '.png';
	}

	/**
	 * This is used to sanitize strings from data files like `moves.js` and
	 * `teambuilder-tables.js`.
	 *
	 * This makes sure untrusted strings can't wreak havoc if someone forgets to
	 * escape it before putting it in HTML.
	 *
	 * None of these characters belong in these files, anyway. (They can be used
	 * in move descriptions, but those are served from `text.js`, which are
	 * definitely always treated as unsanitized.)
	 */
	sanitizeName(name: any) {
		if (!name) return '';
		return ('' + name)
			.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;')
			.slice(0, 50);
	}

	prefs(prop: string) {
		// @ts-ignore
		return window.Storage?.prefs?.(prop);
	}

	getShortName(name: string) {
		let shortName = name.replace(/[^A-Za-z0-9]+$/, '');
		if (shortName.indexOf('(') >= 0) {
			shortName += name.slice(shortName.length).replace(/[^\(\)]+/g, '').replace(/\(\)/g, '');
		}
		return shortName;
	}

	getEffect(name: string | null | undefined): PureEffect | Item | Ability | Move {
		name = (name || '').trim();
		if (name.substr(0, 5) === 'item:') {
			return Dex.getItem(name.substr(5).trim());
		} else if (name.substr(0, 8) === 'ability:') {
			return Dex.getAbility(name.substr(8).trim());
		} else if (name.substr(0, 5) === 'move:') {
			return Dex.getMove(name.substr(5).trim());
		}
		let id = toID(name);
		return new PureEffect(id, name);
	}

	getMove(nameOrMove: string | Move | null | undefined): Move {
		if (nameOrMove && typeof nameOrMove !== 'string') {
			// TODO: don't accept Moves here
			return nameOrMove;
		}
		let name = nameOrMove || '';
		let id = toID(nameOrMove);
		if (window.BattleAliases && id in BattleAliases) {
			name = BattleAliases[id];
			id = toID(name);
		}
		if (!window.BattleMovedex) window.BattleMovedex = {};
		let data = window.BattleMovedex[id];
		if (data && typeof data.exists === 'boolean') return data;

		if (!data && id.substr(0, 11) === 'hiddenpower' && id.length > 11) {
			let [, hpWithType, hpPower] = /([a-z]*)([0-9]*)/.exec(id)!;
			data = {
				...(window.BattleMovedex[hpWithType] || {}),
				basePower: Number(hpPower) || 60,
			};
		}
		if (!data && id.substr(0, 6) === 'return' && id.length > 6) {
			data = {
				...(window.BattleMovedex['return'] || {}),
				basePower: Number(id.slice(6)),
			};
		}
		if (!data && id.substr(0, 11) === 'frustration' && id.length > 11) {
			data = {
				...(window.BattleMovedex['frustration'] || {}),
				basePower: Number(id.slice(11)),
			};
		}

		if (!data) data = {exists: false};
		let move = new Move(id, name, data);
		window.BattleMovedex[id] = move;
		return move;
	}

	getGen3Category(type: string) {
		return [
			'Fire', 'Water', 'Grass', 'Electric', 'Ice', 'Psychic', 'Dark', 'Dragon',
		].includes(type) ? 'Special' : 'Physical';
	}

	getItem(nameOrItem: string | Item | null | undefined): Item {
		if (nameOrItem && typeof nameOrItem !== 'string') {
			// TODO: don't accept Items here
			return nameOrItem;
		}
		let name = nameOrItem || '';
		let id = toID(nameOrItem);
		if (window.BattleAliases && id in BattleAliases) {
			name = BattleAliases[id];
			id = toID(name);
		}
		if (!window.BattleItems) window.BattleItems = {};
		let data = window.BattleItems[id];
		if (data && typeof data.exists === 'boolean') return data;
		if (!data) data = {exists: false};
		let item = new Item(id, name, data);
		window.BattleItems[id] = item;
		return item;
	}

	getAbility(nameOrAbility: string | Ability | null | undefined): Ability {
		if (nameOrAbility && typeof nameOrAbility !== 'string') {
			// TODO: don't accept Abilities here
			return nameOrAbility;
		}
		let name = nameOrAbility || '';
		let id = toID(nameOrAbility);
		if (window.BattleAliases && id in BattleAliases) {
			name = BattleAliases[id];
			id = toID(name);
		}
		if (!window.BattleAbilities) window.BattleAbilities = {};
		let data = window.BattleAbilities[id];
		if (data && typeof data.exists === 'boolean') return data;
		if (!data) data = {exists: false};
		let ability = new Ability(id, name, data);
		window.BattleAbilities[id] = ability;
		return ability;
	}

	getSpecies(nameOrSpecies: string | Species | null | undefined): Species {
		if (nameOrSpecies && typeof nameOrSpecies !== 'string') {
			// TODO: don't accept Species' here
			return nameOrSpecies;
		}
		let name = nameOrSpecies || '';
		let id = toID(nameOrSpecies);
		let formid = id;
		if (!window.BattlePokedexAltForms) window.BattlePokedexAltForms = {};
		if (formid in window.BattlePokedexAltForms) return window.BattlePokedexAltForms[formid];
		if (window.BattleAliases && id in BattleAliases) {
			name = BattleAliases[id];
			id = toID(name);
		} else if (window.BattlePokedex && !(id in BattlePokedex) && window.BattleBaseSpeciesChart) {
			for (const baseSpeciesId of BattleBaseSpeciesChart) {
				if (formid.startsWith(baseSpeciesId)) {
					id = baseSpeciesId;
					break;
				}
			}
		}
		if (!window.BattlePokedex) window.BattlePokedex = {};
		let data = window.BattlePokedex[id];

		let species: Species;
		if (data && typeof data.exists === 'boolean') {
			species = data;
		} else {
			if (!data) data = {exists: false};
			if (!data.tier && id.slice(-5) === 'totem') {
				data.tier = this.getSpecies(id.slice(0, -5)).tier;
			}
			if (!data.tier && data.baseSpecies && toID(data.baseSpecies) !== id) {
				data.tier = this.getSpecies(data.baseSpecies).tier;
			}
			species = new Species(id, name, data);
			window.BattlePokedex[id] = species;
		}

		if (species.cosmeticFormes) {
			for (const forme of species.cosmeticFormes) {
				if (toID(forme) === formid) {
					species = new Species(formid, name, {
						...species,
						name: forme,
						forme: forme.slice(species.name.length + 1),
						baseForme: "",
						baseSpecies: species.name,
						otherFormes: null,
					});
					window.BattlePokedexAltForms[formid] = species;
					break;
				}
			}
		}

		return species;
	}

	/** @deprecated */
	getTier(pokemon: string, genNum = 8, mod?: string): string {
		let species = this.getSpecies(pokemon);
		if (genNum < 8) species = this.forGen(genNum).getSpecies(pokemon);
		let table = window.BattleTeambuilderTable;
		if (!table) return species.tier;
		if (mod === 'doubles') {
			table = table[`gen${genNum}doubles`];
		} else if (genNum < 8) {
			table = table[`gen${genNum}`];
		} else if (mod && table[toID(mod)]) {
			table = table[toID(mod)];
		}

		if (!table.overrideTier) return species.tier;

		let id = species.id;
		if (id in table.overrideTier) {
			return table.overrideTier[id];
		}

		return species.tier;
	}

	getType(type: any): Effect & {damageTaken?: AnyObject, HPivs?: Partial<StatsTable>, HPdvs: Partial<StatsTable>} {
		if (!type || typeof type === 'string') {
			let id = toID(type) as string;
			id = id.substr(0, 1).toUpperCase() + id.substr(1);
			type = (window.BattleTypeChart && window.BattleTypeChart[id]) || {};
			if (type.damageTaken) type.exists = true;
			if (!type.id) type.id = id;
			if (!type.name) type.name = id;
			if (!type.effectType) {
				type.effectType = 'Type';
			}
		}
		return type;
	}

	hasAbility(species: Species, ability: string) {
		for (const i in species.abilities) {
			// @ts-ignore
			if (ability === species.abilities[i]) return true;
		}
		return false;
	}

	getSpriteMod(mod: string, id: string, folder: string, overrideStandard: boolean = false) {
		if (!window.ModSprites[id]) return '';
		if ((!mod || !window.ModSprites[id][mod]) && !overrideStandard) {
			for (const modName in window.ModSprites[id]) {
				if (window.ModSprites[id][modName].includes(folder)) return modName;
			}
		}
		if (mod && window.ModSprites[id][mod] && window.ModSprites[id][mod].includes(folder)) return mod;
		return '';
	}

	loadSpriteData(gen: 'xy' | 'bw') {
		if (this.loadedSpriteData[gen]) return;
		this.loadedSpriteData[gen] = 1;

		let path = $('script[src*="pokedex-mini.js"]').attr('src') || '';
		let qs = '?' + (path.split('?')[1] || '');
		path = (path.match(/.+?(?=data\/pokedex-mini\.js)/) || [])[0] || '';

		let el = document.createElement('script');
		el.src = path + 'data/pokedex-mini-bw.js' + qs;
		document.getElementsByTagName('body')[0].appendChild(el);
	}

	getSpriteData(pokemon: Pokemon | Species | string, isFront: boolean, options: {
		gen?: number,
		shiny?: boolean,
		gender?: GenderName,
		afd?: boolean,
		noScale?: boolean,
		mod: string,
		dynamax?: boolean,
	} = {gen: 6, mod: ''}) {
		let mechanicsGen = options.gen || 6;
		if (options.mod && window.ModConfig[options.mod].spriteGen) mechanicsGen = window.ModConfig[options.mod].spriteGen;
		let isDynamax = !!options.dynamax;
		if (pokemon instanceof Pokemon) {
			if (pokemon.volatiles.transform) {
				options.shiny = pokemon.volatiles.transform[2];
				options.gender = pokemon.volatiles.transform[3];
			} else {
				options.shiny = pokemon.shiny;
				options.gender = pokemon.gender;
			}
			if (pokemon.volatiles.dynamax) isDynamax = true;
			pokemon = pokemon.getSpeciesForme();
		}
		const species = Dex.getSpecies(pokemon);
		let resourcePrefix = Dex.resourcePrefix;
		let spriteDir = 'sprites/';
		let fakeSprite = false;
		let name = species.spriteid;
		let id = toID(name);
		options.mod = this.getSpriteMod(options.mod, id, isFront ? 'front' : 'back', species.exists !== false);
		if (options.mod) {
			resourcePrefix = Dex.modResourcePrefix;
			spriteDir = `${options.mod}/sprites/`;
			fakeSprite = true;
			if (this.getSpriteMod(options.mod, id, (isFront ? 'front' : 'back') + '-shiny', species.exists !== false) === '') options.shiny = false;
		}

		// Gmax sprites are already extremely large, so we don't need to double.
		if (species.name.endsWith('-Gmax')) isDynamax = false;
		let spriteData = {
			gen: mechanicsGen,
			w: 96,
			h: 96,
			y: 0,
			url: resourcePrefix + spriteDir,
			pixelated: true,
			isFrontSprite: false,
			cryurl: '',
			shiny: options.shiny,
		};
		// console.log(spriteData.url);

		let dir;
		let facing;
		if (isFront) {
			spriteData.isFrontSprite = true;
			dir = '';
			facing = 'front';
		} else {
			dir = '-back';
			facing = 'back';
		}
		if (fakeSprite) dir = isFront ? 'front' : 'back';
		// Decide which gen sprites to use.
		//
		// There are several different generations we care about here:
		//
		//   - mechanicsGen: the generation number of the mechanics and battle (options.gen)
		//   - graphicsGen: the generation number of sprite/field graphics the user has requested.
		//     This will default to mechanicsGen, but may be altered depending on user preferences.
		//   - spriteData.gen: the generation number of a the specific Pokemon sprite in question.
		//     This defaults to graphicsGen, but if the graphicsGen doesn't have a sprite for the Pokemon
		//     (eg. Darmanitan in graphicsGen 2) then we go up gens until it exists.
		//
		let graphicsGen = mechanicsGen;
		if (Dex.prefs('nopastgens')) graphicsGen = 6;
		if (Dex.prefs('bwgfx') && graphicsGen >= 6) graphicsGen = 5;
		spriteData.gen = Math.max(graphicsGen, Math.min(species.gen, 5));
		const baseDir = ['', 'gen1', 'gen2', 'gen3', 'gen4', 'gen5', '', '', ''][spriteData.gen];

		let animationData = null;
		let miscData = null;
		let speciesid = species.id;
		if (species.isTotem) speciesid = toID(name);
		if (baseDir === '' && window.BattlePokemonSprites) {
			animationData = BattlePokemonSprites[speciesid];
		}
		if (baseDir === 'gen5' && window.BattlePokemonSpritesBW) {
			animationData = BattlePokemonSpritesBW[speciesid];
		}
		if (window.BattlePokemonSprites) miscData = BattlePokemonSprites[speciesid];
		if (!miscData && window.BattlePokemonSpritesBW) miscData = BattlePokemonSpritesBW[speciesid];
		if (!animationData) animationData = {};
		if (!miscData) miscData = {};

		if (miscData.num !== 0 && miscData.num > -5000) {
			let baseSpeciesid = toID(species.baseSpecies);
			spriteData.cryurl = 'audio/cries/' + baseSpeciesid;
			let formeid = species.formeid;
			if (species.isMega || formeid && (
				formeid === '-sky' ||
				formeid === '-therian' ||
				formeid === '-primal' ||
				formeid === '-eternal' ||
				baseSpeciesid === 'kyurem' ||
				baseSpeciesid === 'necrozma' ||
				formeid === '-super' ||
				formeid === '-unbound' ||
				formeid === '-midnight' ||
				formeid === '-school' ||
				baseSpeciesid === 'oricorio' ||
				baseSpeciesid === 'zygarde'
			)) {
				spriteData.cryurl += formeid;
			}
			spriteData.cryurl += '.mp3';
		}

		if (options.shiny && mechanicsGen > 1) dir += '-shiny';

		// April Fool's 2014
		if (window.Config && Config.server && Config.server.afd || options.afd) {
			dir = 'afd' + dir;
			spriteData.url += dir + '/' + name + '.png';
			// Duplicate code but needed to make AFD tinymax work
			// April Fool's 2020
			if (isDynamax && !options.noScale) {
				spriteData.w *= 0.25;
				spriteData.h *= 0.25;
				spriteData.y += -22;
			} else if (species.isTotem && !options.noScale) {
				spriteData.w *= 0.5;
				spriteData.h *= 0.5;
				spriteData.y += -11;
			}
			return spriteData;
		}

		// Mod Cries
		if (options.mod === 'digimon') {
			spriteData.cryurl = `sprites/${options.mod}/audio/${toID(species.baseSpecies)}`;
			spriteData.cryurl += '.mp3';
		}

		if (animationData[facing + 'f'] && options.gender === 'F') facing += 'f';
		let allowAnim = !fakeSprite && !Dex.prefs('noanim') && !Dex.prefs('nogif');
		if (allowAnim && spriteData.gen >= 6) spriteData.pixelated = false;
		if (allowAnim && animationData[facing] && spriteData.gen >= 5) {
			if (facing.slice(-1) === 'f') name += '-f';
			dir = baseDir + 'ani' + dir;

			spriteData.w = animationData[facing].w;
			spriteData.h = animationData[facing].h;
			spriteData.url += dir + '/' + name + '.gif';
		} else {
			// There is no entry or enough data in pokedex-mini.js
			// Handle these in case-by-case basis; either using BW sprites or matching the played gen.
			if (!fakeSprite) dir = (baseDir || 'gen5') + dir;

			// Gender differences don't exist prior to Gen 4,
			// so there are no sprites for it
			if (spriteData.gen >= 4 && miscData['frontf'] && options.gender === 'F') {
				name += '-f';
			}

			spriteData.url += dir + '/' + name + '.png';
		}

		if (!options.noScale) {
			if (graphicsGen > 4) {
				// no scaling
			} else if (spriteData.isFrontSprite) {
				spriteData.w *= 2;
				spriteData.h *= 2;
				spriteData.y += -16;
			} else {
				// old gen backsprites are multiplied by 1.5x by the 3D engine
				spriteData.w *= 2 / 1.5;
				spriteData.h *= 2 / 1.5;
				spriteData.y += -11;
			}
			if (spriteData.gen <= 2) spriteData.y += 2;
		}
		if (isDynamax && !options.noScale) {
			spriteData.w *= 2;
			spriteData.h *= 2;
			spriteData.y += -22;
		} else if ((species.isTotem || isDynamax) && !options.noScale) {
			spriteData.w *= 1.5;
			spriteData.h *= 1.5;
			spriteData.y += -11;
		}
		return spriteData;
	}

	getPokemonIconNum(id: ID, isFemale?: boolean, facingLeft?: boolean) {
		let num = 0;
		if (window.BattlePokemonSprites?.[id]?.num) {
			num = BattlePokemonSprites[id].num;
		} else if (window.BattlePokedex?.[id]?.num) {
			num = BattlePokedex[id].num;
		}
		if (num < 0) num = 0;
		if (num > 898) num = 0;

		if (window.BattlePokemonIconIndexes?.[id]) {
			num = BattlePokemonIconIndexes[id];
		}

		if (isFemale) {
			if (['unfezant', 'frillish', 'jellicent', 'meowstic', 'pyroar'].includes(id)) {
				num = BattlePokemonIconIndexes[id + 'f'];
			}
		}
		if (facingLeft) {
			if (BattlePokemonIconIndexesLeft[id]) {
				num = BattlePokemonIconIndexesLeft[id];
			}
		}
		return num;
	}

	getPokemonIcon(pokemon: string | Pokemon | ServerPokemon | PokemonSet | null, facingLeft?: boolean, mod: string = '') {
		if (pokemon === 'pokeball') {
			return `background:transparent url(${Dex.resourcePrefix}sprites/pokemonicons-pokeball-sheet.png) no-repeat scroll -0px 4px`;
		} else if (pokemon === 'pokeball-statused') {
			return `background:transparent url(${Dex.resourcePrefix}sprites/pokemonicons-pokeball-sheet.png) no-repeat scroll -40px 4px`;
		} else if (pokemon === 'pokeball-fainted') {
			return `background:transparent url(${Dex.resourcePrefix}sprites/pokemonicons-pokeball-sheet.png) no-repeat scroll -80px 4px;opacity:.4;filter:contrast(0)`;
		} else if (pokemon === 'pokeball-none') {
			return `background:transparent url(${Dex.resourcePrefix}sprites/pokemonicons-pokeball-sheet.png) no-repeat scroll -80px 4px`;
		}

		let id = toID(pokemon);
		if (!pokemon || typeof pokemon === 'string') pokemon = null;
		// @ts-ignore
		if (pokemon?.speciesForme) id = toID(pokemon.speciesForme);
		// @ts-ignore
		if (pokemon?.species) id = toID(pokemon.species);
		// @ts-ignore
		if (pokemon?.volatiles?.formechange && !pokemon.volatiles.transform) {
			// @ts-ignore
			id = toID(pokemon.volatiles.formechange[1]);
		}
		let num = this.getPokemonIconNum(id, pokemon?.gender === 'F', facingLeft);
		let top = Math.floor(num / 12) * 30;
		let left = (num % 12) * 40;
		let fainted = ((pokemon as Pokemon | ServerPokemon)?.fainted ? `;opacity:.3;filter:grayscale(100%) brightness(.5)` : ``);
		let species = Dex.getSpecies(id);
		mod = this.getSpriteMod(mod, id, 'icons', species.exists !== false);
		if (mod) return `background:transparent url(${this.modResourcePrefix}${mod}/sprites/icons/${id}.png) no-repeat scroll -0px -0px${fainted}`;
		return `background:transparent url(${Dex.resourcePrefix}sprites/pokemonicons-sheet.png?v4) no-repeat scroll -${left}px -${top}px${fainted}`;
	}

	getTeambuilderSpriteData(pokemon: any, gen: number = 0, mod: string = ''): TeambuilderSpriteData {
		let id = toID(pokemon.species);
		let spriteid = pokemon.spriteid;
		let species = Dex.getSpecies(pokemon.species);
		if (pokemon.species && !spriteid) {
			spriteid = species.spriteid || toID(pokemon.species);
		}
		if (mod && window.ModConfig[mod].spriteGen) gen = window.ModConfig[mod].spriteGen;
		mod = this.getSpriteMod(mod, id, 'front', species.exists !== false);
		if (mod) {
			return {
				spriteDir: `${mod}/sprites/front`,
				spriteid,
				shiny: (this.getSpriteMod(mod, id, 'front-shiny', species.exists !== false) !== null && pokemon.shiny),
				x: 10,
				y: 5,
			};
		}
		if (species.exists === false) return {spriteDir: 'sprites/gen5', spriteid: '0', x: 10, y: 5};
		const spriteData: TeambuilderSpriteData = {
			spriteid,
			spriteDir: 'sprites/dex',
			x: -2,
			y: -3,
		};
		if (pokemon.shiny) spriteData.shiny = true;
		if (Dex.prefs('nopastgens')) gen = 6;
		let xydexExists = (!species.isNonstandard || species.isNonstandard === 'Past') || [
			"pikachustarter", "eeveestarter", "meltan", "melmetal", "fidgit", "stratagem", "tomohawk", "mollux", "crucibelle", "crucibellemega", "kerfluffle", "pajantom", "jumbao", "caribolt", "smokomodo", "snaelstrom", "equilibra", "astrolotl", "scratchet", "pluffle", "smogecko", "pokestarufo", "pokestarufo2", "pokestarbrycenman", "pokestarmt", "pokestarmt2", "pokestargiant", "pokestarhumanoid", "pokestarmonster", "pokestarf00", "pokestarf002", "pokestarspirit",
		].includes(species.id);
		if (species.gen === 8) xydexExists = false;
		if ((!gen || gen >= 6) && xydexExists) {
			if (species.gen >= 7) {
				spriteData.x = -6;
				spriteData.y = -7;
			} else if (id.substr(0, 6) === 'arceus') {
				spriteData.x = -2;
				spriteData.y = 7;
			} else if (id === 'garchomp') {
				spriteData.x = -2;
				spriteData.y = 2;
			} else if (id === 'garchompmega') {
				spriteData.x = -2;
				spriteData.y = 0;
			}
			return spriteData;
		}
		spriteData.spriteDir = 'sprites/gen5';
		if (gen <= 1 && species.gen <= 1) spriteData.spriteDir = 'sprites/gen1';
		else if (gen <= 2 && species.gen <= 2) spriteData.spriteDir = 'sprites/gen2';
		else if (gen <= 3 && species.gen <= 3) spriteData.spriteDir = 'sprites/gen3';
		else if (gen <= 4 && species.gen <= 4) spriteData.spriteDir = 'sprites/gen4';
		spriteData.x = 10;
		spriteData.y = 5;
		return spriteData;
	}

	getTeambuilderSprite(pokemon: any, gen: number = 0, mod: string = '') {
		if (!pokemon) return '';
		const data = this.getTeambuilderSpriteData(pokemon, gen, mod);
		const shiny = (data.shiny ? '-shiny' : '');
		let resourcePrefix = Dex.resourcePrefix;
		if (data.spriteDir.includes('front')) resourcePrefix = Dex.modResourcePrefix;
		return 'background-image:url(' + resourcePrefix + data.spriteDir + shiny + '/' + data.spriteid + '.png);background-position:' + data.x + 'px ' + data.y + 'px;background-repeat:no-repeat';
	}

	getItemIcon(item: any, mod: string = '') {
		let num = 0;
		if (typeof item === 'string' && exports.BattleItems) item = exports.BattleItems[toID(item)];
		mod = this.getSpriteMod(mod, item.id, 'items');
		if (mod) return `background:transparent url(${this.modResourcePrefix}${mod}/sprites/items/${item.id}.png) no-repeat`;
		if (item?.spritenum) num = item.spritenum;

		let top = Math.floor(num / 16) * 24;
		let left = (num % 16) * 24;
		return 'background:transparent url(' + Dex.resourcePrefix + 'sprites/itemicons-sheet.png?g8) no-repeat scroll -' + left + 'px -' + top + 'px';
	}

	getTypeIcon(type: string | null, b?: boolean, mod: string = '') { // b is just for utilichart.js
		type = this.getType(type).name;
		if (!type) type = '???';
		let sanitizedType = type.replace(/\?/g, '%3f');
		// console.log(sanitizedType);
		mod = this.getSpriteMod(mod, toID(type), 'types');
		if (mod) {
			return `<img src="${this.modResourcePrefix}${mod}/sprites/types/${toID(type)}.png" alt="${type}" class="pixelated${b ? ' b' : ''}" />`;
		} else {
			return `<img src="${Dex.resourcePrefix}sprites/types/${sanitizedType}.png" alt="${type}" height="14" width="32" class="pixelated${b ? ' b' : ''}" />`;
		}
	}

	getCategoryIcon(category: string | null) {
		const categoryID = toID(category);
		let sanitizedCategory = '';
		switch (categoryID) {
		case 'physical':
		case 'special':
		case 'status':
			sanitizedCategory = categoryID.charAt(0).toUpperCase() + categoryID.slice(1);
			break;
		default:
			sanitizedCategory = 'undefined';
			break;
		}
		return `<img src="${Dex.resourcePrefix}sprites/categories/${sanitizedCategory}.png" alt="${sanitizedCategory}" height="14" width="32" class="pixelated" />`;
	}

	getPokeballs() {
		if (this.pokeballs) return this.pokeballs;
		this.pokeballs = [];
		if (!window.BattleItems) window.BattleItems = {};
		for (const data of Object.values(window.BattleItems) as AnyObject[]) {
			if (!data.isPokeball) continue;
			this.pokeballs.push(data.name);
		}
		return this.pokeballs;
	}
};

class ModdedDex {
	gen: number;
	readonly modid: ID;
	readonly cache = {
		Moves: {} as any as {[k: string]: Move},
		Items: {} as any as {[k: string]: Item},
		Abilities: {} as any as {[k: string]: Ability},
		Species: {} as any as {[k: string]: Species},
		Types: {} as any as {[k: string]: Effect},
	};
	pokeballs: string[] | null = null;
	constructor(modid: ID) {
		this.modid = modid;
		if (!modid.startsWith('gen')) {
			this.gen = 8;
		} else {
			this.gen = parseInt(modid.slice(3), 10);
		}
	}
	getMove(name: string): Move {
		let id = toID(name);
		if (window.BattleAliases && id in BattleAliases) {
			name = BattleAliases[id];
			id = toID(name);
		}
		if (this.cache.Moves.hasOwnProperty(id)) return this.cache.Moves[id];

		let data = {...Dex.getMove(name)};

		const table = window.BattleTeambuilderTable[this.modid];
		if (table.overrideMoveInfo[id]) {
			for (const key in table.overrideMoveInfo[id]) {
				data = {...Dex.getMove(name), ...table.overrideMoveInfo[id]};
			}
		}
		if (this.gen <= 3 && data.category !== 'Status') {
			data.category = Dex.getGen3Category(data.type);
		}
		const move = new Move(id, name, data);
		this.cache.Moves[id] = move;
		return move;
	}
	getItem(name: string): Item {
		let id = toID(name);
		if (window.BattleAliases && id in BattleAliases) {
			name = BattleAliases[id];
			id = toID(name);
		}
		if (this.cache.Items.hasOwnProperty(id)) return this.cache.Items[id];
		const table = window.BattleTeambuilderTable[this.modid];
		let data = {...Dex.getItem(name)};
		if (table.fullItemName && id in table.fullItemName) {
			data.name = table.fullItemName[id];
			data.exists = true;
		}
		if (id in table.overrideItemDesc) data.shortDesc = table.overrideItemDesc[id];
		for (let i = this.gen; i < 8; i++) {
			if (id in window.BattleTeambuilderTable['gen' + i].overrideItemDesc) {
				data.shortDesc = window.BattleTeambuilderTable['gen' + i].overrideItemDesc[id];
				break;
			}
		}

		const item = new Item(id, name, data);
		this.cache.Items[id] = item;
		return item;
	}
	getAbility(name: string): Ability {
		let id = toID(name);
		if (window.BattleAliases && id in BattleAliases) {
			name = BattleAliases[id];
			id = toID(name);
		}
		if (this.cache.Abilities.hasOwnProperty(id)) return this.cache.Abilities[id];
		let table = BattleTeambuilderTable[this.modid];
		let data = {...Dex.getAbility(name)};
		if (table.fullAbilityName && id in table.fullAbilityName) {
			data.name = table.fullAbilityName[id];
			data.exists = true;
		}
		if (id in table.overrideAbilityDesc) {
			data.shortDesc = table.overrideAbilityDesc[id];
		} else {
			for (let i = this.gen; i < 8; i++) {
				if (id in window.BattleTeambuilderTable['gen' + i].overrideAbilityDesc) {
					data.shortDesc = window.BattleTeambuilderTable['gen' + i].overrideAbilityDesc[id];
					break;
				}
			}
		}
		const ability = new Ability(id, name, data);
		this.cache.Abilities[id] = ability;
		return ability;
	}
	getSpecies(name: string): Species {
		let id = toID(name);
		const table = window.BattleTeambuilderTable[this.modid];
		// if (window.BattleAliases && id in BattleAliases && !table.overrideDexInfo[id]) {
			// name = BattleAliases[id];
			// id = toID(name);
		// }
		if (this.cache.Species.hasOwnProperty(id)) return this.cache.Species[id];
		let data = {...Dex.getSpecies(name)};
		if (table.overrideDexInfo[id]) {
			for (const key in table.overrideDexInfo[id]) {
				data = {...Dex.getSpecies(name), ...table.overrideDexInfo[id]};
			}
		}
		if (this.gen < 3) {
			data.abilities = {0: "None"};
		}

		if (id in table.overrideTier) data.tier = table.overrideTier[id];
		if (!data.tier && id.slice(-5) === 'totem') {
			data.tier = this.getSpecies(id.slice(0, -5)).tier;
		}
		if (!data.tier && data.baseSpecies && toID(data.baseSpecies) !== id) {
			data.tier = this.getSpecies(data.baseSpecies).tier;
		}
		if (data.gen > this.gen) data.tier = 'Illegal';
		const species = new Species(id, name, data);
		this.cache.Species[id] = species;
		return species;
	}
	getType(name: string): Effect {
		let id = toID(name) as string;
		id = id.substr(0, 1).toUpperCase() + id.substr(1);

		if (this.cache.Types.hasOwnProperty(id)) return this.cache.Types[id];

		let data = {...Dex.getType(name)};

		for (let i = 7; i >= this.gen; i--) {
			if (id in window.BattleTeambuilderTable['gen' + i].removeType) {
				data.exists = false;
				// don't bother correcting its attributes given it doesn't exist
				break;
			}
			if (id in window.BattleTeambuilderTable['gen' + i].overrideTypeChart) {
				data = {...data, ...window.BattleTeambuilderTable['gen' + i].overrideTypeChart[id]};
			}
		}

		this.cache.Types[id] = data;
		return data;
	}
	getPokeballs() {
		if (this.pokeballs) return this.pokeballs;
		this.pokeballs = [];
		if (!window.BattleItems) window.BattleItems = {};
		for (const data of Object.values(window.BattleItems) as AnyObject[]) {
			if (data.gen && data.gen > this.gen) continue;
			if (!data.isPokeball) continue;
			this.pokeballs.push(data.name);
		}
		return this.pokeballs;
	}
}

if (typeof require === 'function') {
	// in Node
	(global as any).Dex = Dex;
	(global as any).toID = toID;
}
