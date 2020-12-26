var _temp;/**
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




if(typeof window==='undefined'){

global.window=global;
}else{

window.exports=window;
}


window.nodewebkit=!!(typeof process!=='undefined'&&process.versions&&process.versions['node-webkit']);

function toID(text){var _text,_text2;
if((_text=text)!=null&&_text.id){
text=text.id;
}else if((_text2=text)!=null&&_text2.userid){
text=text.userid;
}
if(typeof text!=='string'&&typeof text!=='number')return'';
return(''+text).toLowerCase().replace(/[^a-z0-9]+/g,'');
}

function toUserid(text){
return toID(text);
}


var PSUtils=new(function(){function _class(){}var _proto=_class.prototype;_proto.










splitFirst=function splitFirst(str,delimiter){var limit=arguments.length>2&&arguments[2]!==undefined?arguments[2]:1;
var splitStr=[];
while(splitStr.length<limit){
var delimiterIndex=str.indexOf(delimiter);
if(delimiterIndex>=0){
splitStr.push(str.slice(0,delimiterIndex));
str=str.slice(delimiterIndex+delimiter.length);
}else{
splitStr.push(str);
str='';
}
}
splitStr.push(str);
return splitStr;
};_proto.












compare=function compare(a,b){
if(typeof a==='number'){
return a-b;
}
if(typeof a==='string'){
return a.localeCompare(b);
}
if(typeof a==='boolean'){
return(a?1:2)-(b?1:2);
}
if(Array.isArray(a)){
for(var i=0;i<a.length;i++){
var comparison=PSUtils.compare(a[i],b[i]);
if(comparison)return comparison;
}
return 0;
}
if(a.reverse){
return PSUtils.compare(b.reverse,a.reverse);
}
throw new Error("Passed value "+a+" is not comparable");
};_proto.












sortBy=function sortBy(array,callback){
if(!callback)return array.sort(PSUtils.compare);
return array.sort(function(a,b){return PSUtils.compare(callback(a),callback(b));});
};return _class;}())();






function toRoomid(roomid){
return roomid.replace(/[^a-zA-Z0-9-]+/g,'').toLowerCase();
}

function toName(name){
if(typeof name!=='string'&&typeof name!=='number')return'';
name=(''+name).replace(/[\|\s\[\]\,\u202e]+/g,' ').trim();
if(name.length>18)name=name.substr(0,18).trim();


name=name.replace(
/[\u0300-\u036f\u0483-\u0489\u0610-\u0615\u064B-\u065F\u0670\u06D6-\u06DC\u06DF-\u06ED\u0E31\u0E34-\u0E3A\u0E47-\u0E4E]{3,}/g,
'');

name=name.replace(/[\u239b-\u23b9]/g,'');

return name;
}






















var Dex=new(_temp=function(){function _temp(){this.
gen=8;this.
modid='gen8';this.
cache=null;this.

statNames=['hp','atk','def','spa','spd','spe'];this.
statNamesExceptHP=['atk','def','spa','spd','spe'];this.

pokeballs=null;this.

resourcePrefix=function(){var _window$document,_window$document$loca;
var prefix='';
if(((_window$document=window.document)==null?void 0:(_window$document$loca=_window$document.location)==null?void 0:_window$document$loca.protocol)!=='http:')prefix='https:';
return prefix+"//"+'play.pokemonshowdown.com'+"/";
}();this.

fxPrefix=function(){var _window$document2,_window$document2$loc;
if(((_window$document2=window.document)==null?void 0:(_window$document2$loc=_window$document2.location)==null?void 0:_window$document2$loc.protocol)==='file:'){
if(window.Replays)return"https://"+'play.pokemonshowdown.com'+"/fx/";
return"fx/";
}
return"//"+'play.pokemonshowdown.com'+"/fx/";
}();this.

loadedSpriteData={xy:1,bw:0};this.
moddedDexes={};}var _proto2=_temp.prototype;_proto2.

mod=function mod(modid){
if(modid==='gen8')return this;
if(!window.BattleTeambuilderTable)return this;
if(modid in this.moddedDexes){
return this.moddedDexes[modid];
}
this.moddedDexes[modid]=new ModdedDex(modid);
return this.moddedDexes[modid];
};_proto2.
forGen=function forGen(gen){
if(!gen)return this;
return this.mod("gen"+gen);
};_proto2.

resolveAvatar=function resolveAvatar(avatar){var _window$Config,_window$Config$server;
if(window.BattleAvatarNumbers&&avatar in BattleAvatarNumbers){
avatar=BattleAvatarNumbers[avatar];
}
if(avatar.charAt(0)==='#'){
return Dex.resourcePrefix+'sprites/trainers-custom/'+toID(avatar.substr(1))+'.png';
}
if(avatar.includes('.')&&(_window$Config=window.Config)!=null&&(_window$Config$server=_window$Config.server)!=null&&_window$Config$server.registered){

var protocol=Config.server.port===443?'https':'http';
return protocol+'://'+Config.server.host+':'+Config.server.port+
'/avatars/'+encodeURIComponent(avatar).replace(/\%3F/g,'?');
}
return Dex.resourcePrefix+'sprites/trainers/'+Dex.sanitizeName(avatar||'unknown')+'.png';
};_proto2.












sanitizeName=function sanitizeName(name){
if(!name)return'';
return(''+name).
replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;').
slice(0,50);
};_proto2.

prefs=function prefs(prop){var _window$Storage;

return(_window$Storage=window.Storage)==null?void 0:_window$Storage.prefs==null?void 0:_window$Storage.prefs(prop);
};_proto2.

getShortName=function getShortName(name){
var shortName=name.replace(/[^A-Za-z0-9]+$/,'');
if(shortName.indexOf('(')>=0){
shortName+=name.slice(shortName.length).replace(/[^\(\)]+/g,'').replace(/\(\)/g,'');
}
return shortName;
};_proto2.

getEffect=function getEffect(name){
name=(name||'').trim();
if(name.substr(0,5)==='item:'){
return Dex.getItem(name.substr(5).trim());
}else if(name.substr(0,8)==='ability:'){
return Dex.getAbility(name.substr(8).trim());
}else if(name.substr(0,5)==='move:'){
return Dex.getMove(name.substr(5).trim());
}
var id=toID(name);
return new PureEffect(id,name);
};_proto2.

getMove=function getMove(nameOrMove){
if(nameOrMove&&typeof nameOrMove!=='string'){

return nameOrMove;
}
var name=nameOrMove||'';
var id=toID(nameOrMove);
if(window.BattleAliases&&id in BattleAliases){
name=BattleAliases[id];
id=toID(name);
}
if(!window.BattleMovedex)window.BattleMovedex={};
var data=window.BattleMovedex[id];
if(data&&typeof data.exists==='boolean')return data;

if(!data&&id.substr(0,11)==='hiddenpower'&&id.length>11){var _ref=
/([a-z]*)([0-9]*)/.exec(id),hpWithType=_ref[1],hpPower=_ref[2];
data=Object.assign({},
window.BattleMovedex[hpWithType]||{},{
basePower:Number(hpPower)||60});

}
if(!data&&id.substr(0,6)==='return'&&id.length>6){
data=Object.assign({},
window.BattleMovedex['return']||{},{
basePower:Number(id.slice(6))});

}
if(!data&&id.substr(0,11)==='frustration'&&id.length>11){
data=Object.assign({},
window.BattleMovedex['frustration']||{},{
basePower:Number(id.slice(11))});

}

if(!data)data={exists:false};
var move=new Move(id,name,data);
window.BattleMovedex[id]=move;
return move;
};_proto2.

getGen3Category=function getGen3Category(type){
return[
'Fire','Water','Grass','Electric','Ice','Psychic','Dark','Dragon'].
includes(type)?'Special':'Physical';
};_proto2.

getItem=function getItem(nameOrItem){
if(nameOrItem&&typeof nameOrItem!=='string'){

return nameOrItem;
}
var name=nameOrItem||'';
var id=toID(nameOrItem);
if(window.BattleAliases&&id in BattleAliases){
name=BattleAliases[id];
id=toID(name);
}
if(!window.BattleItems)window.BattleItems={};
var data=window.BattleItems[id];
if(data&&typeof data.exists==='boolean')return data;
if(!data)data={exists:false};
var item=new Item(id,name,data);
window.BattleItems[id]=item;
return item;
};_proto2.

getAbility=function getAbility(nameOrAbility){
if(nameOrAbility&&typeof nameOrAbility!=='string'){

return nameOrAbility;
}
var name=nameOrAbility||'';
var id=toID(nameOrAbility);
if(window.BattleAliases&&id in BattleAliases){
name=BattleAliases[id];
id=toID(name);
}
if(!window.BattleAbilities)window.BattleAbilities={};
var data=window.BattleAbilities[id];
if(data&&typeof data.exists==='boolean')return data;
if(!data)data={exists:false};
var ability=new Ability(id,name,data);
window.BattleAbilities[id]=ability;
return ability;
};_proto2.

getSpecies=function getSpecies(nameOrSpecies){
if(nameOrSpecies&&typeof nameOrSpecies!=='string'){

return nameOrSpecies;
}
var name=nameOrSpecies||'';
var id=toID(nameOrSpecies);
var formid=id;
if(!window.BattlePokedexAltForms)window.BattlePokedexAltForms={};
if(formid in window.BattlePokedexAltForms)return window.BattlePokedexAltForms[formid];
if(window.BattleAliases&&id in BattleAliases){
name=BattleAliases[id];
id=toID(name);
}else if(window.BattlePokedex&&!(id in BattlePokedex)&&window.BattleBaseSpeciesChart){for(var _i=0,_BattleBaseSpeciesCha=
BattleBaseSpeciesChart;_i<_BattleBaseSpeciesCha.length;_i++){var baseSpeciesId=_BattleBaseSpeciesCha[_i];
if(formid.startsWith(baseSpeciesId)){
id=baseSpeciesId;
break;
}
}
}
if(!window.BattlePokedex)window.BattlePokedex={};
var data=window.BattlePokedex[id];

var species;
if(data&&typeof data.exists==='boolean'){
species=data;
}else{
if(!data)data={exists:false};
if(!data.tier&&id.slice(-5)==='totem'){
data.tier=this.getSpecies(id.slice(0,-5)).tier;
}
if(!data.tier&&data.baseSpecies&&toID(data.baseSpecies)!==id){
data.tier=this.getSpecies(data.baseSpecies).tier;
}
species=new Species(id,name,data);
window.BattlePokedex[id]=species;
}

if(species.cosmeticFormes){for(var _i2=0,_species$cosmeticForm=
species.cosmeticFormes;_i2<_species$cosmeticForm.length;_i2++){var forme=_species$cosmeticForm[_i2];
if(toID(forme)===formid){
species=new Species(formid,name,Object.assign({},
species,{
name:forme,
forme:forme.slice(species.name.length+1),
baseForme:"",
baseSpecies:species.name,
otherFormes:null}));

window.BattlePokedexAltForms[formid]=species;
break;
}
}
}

return species;
};_proto2.


getTier=function getTier(pokemon){var genNum=arguments.length>1&&arguments[1]!==undefined?arguments[1]:8;var mod=arguments.length>2?arguments[2]:undefined;
var species=this.getSpecies(pokemon);
if(genNum<8)species=this.forGen(genNum).getSpecies(pokemon);
var table=window.BattleTeambuilderTable;
if(!table)return species.tier;
if(mod==='doubles'){
table=table["gen"+genNum+"doubles"];
}else if(genNum<8){
table=table["gen"+genNum];
}else if(mod&&table[toID(mod)]){
table=table[toID(mod)];
}

if(!table.overrideTier)return species.tier;

var id=species.id;
if(id in table.overrideTier){
return table.overrideTier[id];
}

return species.tier;
};_proto2.

getType=function getType(type){
if(!type||typeof type==='string'){
var id=toID(type);
id=id.substr(0,1).toUpperCase()+id.substr(1);
type=window.BattleTypeChart&&window.BattleTypeChart[id]||{};
if(type.damageTaken)type.exists=true;
if(!type.id)type.id=id;
if(!type.name)type.name=id;
if(!type.effectType){
type.effectType='Type';
}
}
return type;
};_proto2.

hasAbility=function hasAbility(species,ability){
for(var i in species.abilities){

if(ability===species.abilities[i])return true;
}
return false;
};_proto2.

loadSpriteData=function loadSpriteData(gen){
if(this.loadedSpriteData[gen])return;
this.loadedSpriteData[gen]=1;

var path=$('script[src*="pokedex-mini.js"]').attr('src')||'';
var qs='?'+(path.split('?')[1]||'');
path=(path.match(/.+?(?=data\/pokedex-mini\.js)/)||[])[0]||'';

var el=document.createElement('script');
el.src=path+'data/pokedex-mini-bw.js'+qs;
document.getElementsByTagName('body')[0].appendChild(el);
};_proto2.
getSpriteData=function getSpriteData(pokemon,isFront)







{var options=arguments.length>2&&arguments[2]!==undefined?arguments[2]:{gen:6};
var mechanicsGen=options.gen||6;
var isDynamax=!!options.dynamax;
if(pokemon instanceof Pokemon){
if(pokemon.volatiles.transform){
options.shiny=pokemon.volatiles.transform[2];
options.gender=pokemon.volatiles.transform[3];
}else{
options.shiny=pokemon.shiny;
options.gender=pokemon.gender;
}
if(pokemon.volatiles.dynamax)isDynamax=true;
pokemon=pokemon.getSpeciesForme();
}
var species=Dex.getSpecies(pokemon);

if(species.name.endsWith('-Gmax'))isDynamax=false;
var spriteData={
gen:mechanicsGen,
w:96,
h:96,
y:0,
url:Dex.resourcePrefix+'sprites/',
pixelated:true,
isFrontSprite:false,
cryurl:'',
shiny:options.shiny};

var name=species.spriteid;
var dir;
var facing;
if(isFront){
spriteData.isFrontSprite=true;
dir='';
facing='front';
}else{
dir='-back';
facing='back';
}












var graphicsGen=mechanicsGen;
if(Dex.prefs('nopastgens'))graphicsGen=6;
if(Dex.prefs('bwgfx')&&graphicsGen>=6)graphicsGen=5;
spriteData.gen=Math.max(graphicsGen,Math.min(species.gen,5));
var baseDir=['','gen1','gen2','gen3','gen4','gen5','','',''][spriteData.gen];

var animationData=null;
var miscData=null;
var speciesid=species.id;
if(species.isTotem)speciesid=toID(name);
if(baseDir===''&&window.BattlePokemonSprites){
animationData=BattlePokemonSprites[speciesid];
}
if(baseDir==='gen5'&&window.BattlePokemonSpritesBW){
animationData=BattlePokemonSpritesBW[speciesid];
}
if(window.BattlePokemonSprites)miscData=BattlePokemonSprites[speciesid];
if(!miscData&&window.BattlePokemonSpritesBW)miscData=BattlePokemonSpritesBW[speciesid];
if(!animationData)animationData={};
if(!miscData)miscData={};

if(miscData.num!==0&&miscData.num>-5000){
var baseSpeciesid=toID(species.baseSpecies);
spriteData.cryurl='audio/cries/'+baseSpeciesid;
var formeid=species.formeid;
if(species.isMega||formeid&&(
formeid==='-sky'||
formeid==='-therian'||
formeid==='-primal'||
formeid==='-eternal'||
baseSpeciesid==='kyurem'||
baseSpeciesid==='necrozma'||
formeid==='-super'||
formeid==='-unbound'||
formeid==='-midnight'||
formeid==='-school'||
baseSpeciesid==='oricorio'||
baseSpeciesid==='zygarde'))
{
spriteData.cryurl+=formeid;
}
spriteData.cryurl+='.mp3';
}

if(options.shiny&&mechanicsGen>1)dir+='-shiny';


if(window.Config&&Config.server&&Config.server.afd||options.afd){
dir='afd'+dir;
spriteData.url+=dir+'/'+name+'.png';


if(isDynamax&&!options.noScale){
spriteData.w*=0.25;
spriteData.h*=0.25;
spriteData.y+=-22;
}else if(species.isTotem&&!options.noScale){
spriteData.w*=0.5;
spriteData.h*=0.5;
spriteData.y+=-11;
}
return spriteData;
}


if(options.mod){
spriteData.cryurl="sprites/"+options.mod+"/audio/"+toID(species.baseSpecies);
spriteData.cryurl+='.mp3';
}

if(animationData[facing+'f']&&options.gender==='F')facing+='f';
var allowAnim=!Dex.prefs('noanim')&&!Dex.prefs('nogif');
if(allowAnim&&spriteData.gen>=6)spriteData.pixelated=false;
if(allowAnim&&animationData[facing]&&spriteData.gen>=5){
if(facing.slice(-1)==='f')name+='-f';
dir=baseDir+'ani'+dir;

spriteData.w=animationData[facing].w;
spriteData.h=animationData[facing].h;
spriteData.url+=dir+'/'+name+'.gif';
}else{


dir=(baseDir||'gen5')+dir;



if(spriteData.gen>=4&&miscData['frontf']&&options.gender==='F'){
name+='-f';
}

spriteData.url+=dir+'/'+name+'.png';
}

if(!options.noScale){
if(graphicsGen>4){

}else if(spriteData.isFrontSprite){
spriteData.w*=2;
spriteData.h*=2;
spriteData.y+=-16;
}else{

spriteData.w*=2/1.5;
spriteData.h*=2/1.5;
spriteData.y+=-11;
}
if(spriteData.gen<=2)spriteData.y+=2;
}
if(isDynamax&&!options.noScale){
spriteData.w*=2;
spriteData.h*=2;
spriteData.y+=-22;
}else if((species.isTotem||isDynamax)&&!options.noScale){
spriteData.w*=1.5;
spriteData.h*=1.5;
spriteData.y+=-11;
}

return spriteData;
};_proto2.

getPokemonIconNum=function getPokemonIconNum(id,isFemale,facingLeft){var _window$BattlePokemon,_window$BattlePokemon2,_window$BattlePokedex,_window$BattlePokedex2,_window$BattlePokemon3;
var num=0;
if((_window$BattlePokemon=window.BattlePokemonSprites)!=null&&(_window$BattlePokemon2=_window$BattlePokemon[id])!=null&&_window$BattlePokemon2.num){
num=BattlePokemonSprites[id].num;
}else if((_window$BattlePokedex=window.BattlePokedex)!=null&&(_window$BattlePokedex2=_window$BattlePokedex[id])!=null&&_window$BattlePokedex2.num){
num=BattlePokedex[id].num;
}
if(num<0)num=0;
if(num>898)num=0;

if((_window$BattlePokemon3=window.BattlePokemonIconIndexes)!=null&&_window$BattlePokemon3[id]){
num=BattlePokemonIconIndexes[id];
}

if(isFemale){
if(['unfezant','frillish','jellicent','meowstic','pyroar'].includes(id)){
num=BattlePokemonIconIndexes[id+'f'];
}
}
if(facingLeft){
if(BattlePokemonIconIndexesLeft[id]){
num=BattlePokemonIconIndexesLeft[id];
}
}
return num;
};_proto2.

getPokemonIcon=function getPokemonIcon(pokemon,facingLeft){var _pokemon,_pokemon2,_pokemon3,_pokemon3$volatiles,_pokemon4,_pokemon5;
if(pokemon==='pokeball'){
return"background:transparent url("+Dex.resourcePrefix+"sprites/pokemonicons-pokeball-sheet.png) no-repeat scroll -0px 4px";
}else if(pokemon==='pokeball-statused'){
return"background:transparent url("+Dex.resourcePrefix+"sprites/pokemonicons-pokeball-sheet.png) no-repeat scroll -40px 4px";
}else if(pokemon==='pokeball-fainted'){
return"background:transparent url("+Dex.resourcePrefix+"sprites/pokemonicons-pokeball-sheet.png) no-repeat scroll -80px 4px;opacity:.4;filter:contrast(0)";
}else if(pokemon==='pokeball-none'){
return"background:transparent url("+Dex.resourcePrefix+"sprites/pokemonicons-pokeball-sheet.png) no-repeat scroll -80px 4px";
}

var id=toID(pokemon);
if(!pokemon||typeof pokemon==='string')pokemon=null;

if((_pokemon=pokemon)!=null&&_pokemon.speciesForme)id=toID(pokemon.speciesForme);

if((_pokemon2=pokemon)!=null&&_pokemon2.species)id=toID(pokemon.species);

if((_pokemon3=pokemon)!=null&&(_pokemon3$volatiles=_pokemon3.volatiles)!=null&&_pokemon3$volatiles.formechange&&!pokemon.volatiles.transform){

id=toID(pokemon.volatiles.formechange[1]);
}
var num=this.getPokemonIconNum(id,((_pokemon4=pokemon)==null?void 0:_pokemon4.gender)==='F',facingLeft);

var top=Math.floor(num/12)*30;
var left=num%12*40;
var fainted=(_pokemon5=pokemon)!=null&&_pokemon5.fainted?";opacity:.3;filter:grayscale(100%) brightness(.5)":"";
return"background:transparent url("+Dex.resourcePrefix+"sprites/pokemonicons-sheet.png?v4) no-repeat scroll -"+left+"px -"+top+"px"+fainted;
};_proto2.

getTeambuilderSpriteData=function getTeambuilderSpriteData(pokemon){var gen=arguments.length>1&&arguments[1]!==undefined?arguments[1]:0;
var id=toID(pokemon.species);
var spriteid=pokemon.spriteid;
var species=Dex.getSpecies(pokemon.species);
if(pokemon.species&&!spriteid){
spriteid=species.spriteid||toID(pokemon.species);
}
if(species.exists===false)return{spriteDir:'sprites/gen5',spriteid:'0',x:10,y:5};
var spriteData={
spriteid:spriteid,
spriteDir:'sprites/dex',
x:-2,
y:-3};

if(pokemon.shiny)spriteData.shiny=true;
if(Dex.prefs('nopastgens'))gen=6;
var xydexExists=!species.isNonstandard||species.isNonstandard==='Past'||[
"pikachustarter","eeveestarter","meltan","melmetal","fidgit","stratagem","tomohawk","mollux","crucibelle","crucibellemega","kerfluffle","pajantom","jumbao","caribolt","smokomodo","snaelstrom","equilibra","astrolotl","scratchet","pluffle","smogecko","pokestarufo","pokestarufo2","pokestarbrycenman","pokestarmt","pokestarmt2","pokestargiant","pokestarhumanoid","pokestarmonster","pokestarf00","pokestarf002","pokestarspirit"].
includes(species.id);
if(species.gen===8)xydexExists=false;
if((!gen||gen>=6)&&xydexExists){
if(species.gen>=7){
spriteData.x=-6;
spriteData.y=-7;
}else if(id.substr(0,6)==='arceus'){
spriteData.x=-2;
spriteData.y=7;
}else if(id==='garchomp'){
spriteData.x=-2;
spriteData.y=2;
}else if(id==='garchompmega'){
spriteData.x=-2;
spriteData.y=0;
}
return spriteData;
}
spriteData.spriteDir='sprites/gen5';
if(gen<=1&&species.gen<=1)spriteData.spriteDir='sprites/gen1';else
if(gen<=2&&species.gen<=2)spriteData.spriteDir='sprites/gen2';else
if(gen<=3&&species.gen<=3)spriteData.spriteDir='sprites/gen3';else
if(gen<=4&&species.gen<=4)spriteData.spriteDir='sprites/gen4';
spriteData.x=10;
spriteData.y=5;
return spriteData;
};_proto2.

getTeambuilderSprite=function getTeambuilderSprite(pokemon){var gen=arguments.length>1&&arguments[1]!==undefined?arguments[1]:0;
if(!pokemon)return'';
var data=this.getTeambuilderSpriteData(pokemon,gen);
var shiny=data.shiny?'-shiny':'';
return'background-image:url('+Dex.resourcePrefix+data.spriteDir+shiny+'/'+data.spriteid+'.png);background-position:'+data.x+'px '+data.y+'px;background-repeat:no-repeat';
};_proto2.

getItemIcon=function getItemIcon(item){var _item;
var num=0;
if(typeof item==='string'&&exports.BattleItems)item=exports.BattleItems[toID(item)];
if((_item=item)!=null&&_item.spritenum)num=item.spritenum;

var top=Math.floor(num/16)*24;
var left=num%16*24;
return'background:transparent url('+Dex.resourcePrefix+'sprites/itemicons-sheet.png?g8) no-repeat scroll -'+left+'px -'+top+'px';
};_proto2.

getTypeIcon=function getTypeIcon(type,b){
type=this.getType(type).name;
if(!type)type='???';
var sanitizedType=type.replace(/\?/g,'%3f');
return"<img src=\""+Dex.resourcePrefix+"sprites/types/"+sanitizedType+".png\" alt=\""+type+"\" height=\"14\" width=\"32\" class=\"pixelated"+(b?' b':'')+"\" />";
};_proto2.

getCategoryIcon=function getCategoryIcon(category){
var categoryID=toID(category);
var sanitizedCategory='';
switch(categoryID){
case'physical':
case'special':
case'status':
sanitizedCategory=categoryID.charAt(0).toUpperCase()+categoryID.slice(1);
break;
default:
sanitizedCategory='undefined';
break;}

return"<img src=\""+Dex.resourcePrefix+"sprites/categories/"+sanitizedCategory+".png\" alt=\""+sanitizedCategory+"\" height=\"14\" width=\"32\" class=\"pixelated\" />";
};_proto2.

getPokeballs=function getPokeballs(){
if(this.pokeballs)return this.pokeballs;
this.pokeballs=[];
if(!window.BattleItems)window.BattleItems={};for(var _i3=0,_ref2=
Object.values(window.BattleItems);_i3<_ref2.length;_i3++){var data=_ref2[_i3];
if(!data.isPokeball)continue;
this.pokeballs.push(data.name);
}
return this.pokeballs;
};return _temp;}(),_temp)();var


ModdedDex=function(){










function ModdedDex(modid){this.cache={Moves:{},Items:{},Abilities:{},Species:{},Types:{}};this.pokeballs=null;
this.modid=modid;
if(!modid.startsWith('gen')){
this.gen=8;
}else{
this.gen=parseInt(modid.slice(3),10);
}
}var _proto3=ModdedDex.prototype;_proto3.
getMove=function getMove(name){
var id=toID(name);
if(window.BattleAliases&&id in BattleAliases){
name=BattleAliases[id];
id=toID(name);
}
if(this.cache.Moves.hasOwnProperty(id))return this.cache.Moves[id];

var data=Object.assign({},Dex.getMove(name));

var table=window.BattleTeambuilderTable[this.modid];
if(table.fullMoveName&&id in table.fullMoveName){
data.name=table.fullMoveName[id];
data.exists=true;
name=table.fullMoveName[id];
}
if(id in table.overrideAcc)data.accuracy=table.overrideAcc[id];
if(id in table.overrideBP)data.basePower=table.overrideBP[id];
if(id in table.overridePP)data.pp=table.overridePP[id];
if(id in table.overrideMoveType)data.type=table.overrideMoveType[id];
if(id in table.overrideMoveCategory)data.category=table.overrideMoveCategory[id];
if(id in table.overrideMoveDesc){
data.shortDesc=table.overrideMoveDesc[id];
}else{
for(var i=this.gen;i<8;i++){
if(id in window.BattleTeambuilderTable['gen'+i].overrideMoveDesc){
data.shortDesc=window.BattleTeambuilderTable['gen'+i].overrideMoveDesc[id];
break;
}
}
}
if(this.gen<=3&&data.category!=='Status'){
data.category=Dex.getGen3Category(data.type);
}
var move=new Move(id,name,data);
this.cache.Moves[id]=move;
return move;
};_proto3.
getItem=function getItem(name){
var id=toID(name);
if(window.BattleAliases&&id in BattleAliases){
name=BattleAliases[id];
id=toID(name);
}
if(this.cache.Items.hasOwnProperty(id))return this.cache.Items[id];
var table=window.BattleTeambuilderTable[this.modid];
var data=Object.assign({},Dex.getItem(name));
if(table.fullItemName&&id in table.fullItemName)data.name=table.fullItemName[id];
if(id in table.overrideItemDesc)data.shortDesc=table.overrideItemDesc[id];
for(var i=this.gen;i<8;i++){
if(id in window.BattleTeambuilderTable['gen'+i].overrideItemDesc){
data.shortDesc=window.BattleTeambuilderTable['gen'+i].overrideItemDesc[id];
break;
}
}

var item=new Item(id,name,data);
this.cache.Items[id]=item;
return item;
};_proto3.
getAbility=function getAbility(name){
var id=toID(name);
if(window.BattleAliases&&id in BattleAliases){
name=BattleAliases[id];
id=toID(name);
}
if(this.cache.Abilities.hasOwnProperty(id))return this.cache.Abilities[id];
var table=BattleTeambuilderTable[this.modid];
var data=Object.assign({},Dex.getAbility(name));
if(table.fullAbilityName&&id in table.fullAbilityName)data.name=table.fullAbilityName[id];
if(id in table.overrideAbilityDesc){
data.shortDesc=table.overrideAbilityDesc[id];
}else{
for(var i=this.gen;i<8;i++){
if(id in window.BattleTeambuilderTable['gen'+i].overrideAbilityDesc){
data.shortDesc=window.BattleTeambuilderTable['gen'+i].overrideAbilityDesc[id];
break;
}
}
}
var ability=new Ability(id,name,data);
this.cache.Abilities[id]=ability;
return ability;
};_proto3.
getSpecies=function getSpecies(name){
var id=toID(name);
if(window.BattleAliases&&id in BattleAliases){
name=BattleAliases[id];
id=toID(name);
}
if(this.cache.Species.hasOwnProperty(id))return this.cache.Species[id];
var table=window.BattleTeambuilderTable[this.modid];
var data=Object.assign({},Dex.getSpecies(name));
if(table.fullFakemonData&&id in table.fullFakemonData)data=table.fullFakemonData[id];else
{
var abilities=Object.assign({},data.abilities);
if(id in table.overrideAbility){
abilities['0']=table.overrideAbility[id];
}
if(typeof table.overrideSecondAbility!=='undefined'&&id in table.overrideSecondAbility){
abilities['1']=table.overrideSecondAbility[id];
}
if(typeof table.requiredItem!=='undefined'&&id in table.requiredItem){
data.requiredItem=table.requiredItem[id];
}
if(id in table.removeSecondAbility){
delete abilities['1'];
}
if(id in table.overrideHiddenAbility){
abilities['H']=table.overrideHiddenAbility[id];
}
if(this.gen<5)delete abilities['H'];
if(this.gen<7)delete abilities['S'];

data.abilities=abilities;
}
if(this.gen<3){
data.abilities={0:"None"};
}
if(id in table.overrideStats){
data.baseStats=Object.assign({},data.baseStats,table.overrideStats[id]);
}
if(id in table.overrideType)data.types=table.overrideType[id].split('/');
if(id in table.overrideTier)data.tier=table.overrideTier[id];
if(!data.tier&&id.slice(-5)==='totem'){
data.tier=this.getSpecies(id.slice(0,-5)).tier;
}
if(!data.tier&&data.baseSpecies&&toID(data.baseSpecies)!==id){
data.tier=this.getSpecies(data.baseSpecies).tier;
}
if(data.gen>this.gen)data.tier='Illegal';
var species=new Species(id,name,data);
this.cache.Species[id]=species;
return species;
};_proto3.
getType=function getType(name){
var id=toID(name);
id=id.substr(0,1).toUpperCase()+id.substr(1);

if(this.cache.Types.hasOwnProperty(id))return this.cache.Types[id];

var data=Object.assign({},Dex.getType(name));

for(var i=7;i>=this.gen;i--){
if(id in window.BattleTeambuilderTable['gen'+i].removeType){
data.exists=false;

break;
}
if(id in window.BattleTeambuilderTable['gen'+i].overrideTypeChart){
data=Object.assign({},data,window.BattleTeambuilderTable['gen'+i].overrideTypeChart[id]);
}
}

this.cache.Types[id]=data;
return data;
};_proto3.
getPokeballs=function getPokeballs(){
if(this.pokeballs)return this.pokeballs;
this.pokeballs=[];
if(!window.BattleItems)window.BattleItems={};for(var _i4=0,_ref3=
Object.values(window.BattleItems);_i4<_ref3.length;_i4++){var data=_ref3[_i4];
if(data.gen&&data.gen>this.gen)continue;
if(!data.isPokeball)continue;
this.pokeballs.push(data.name);
}
return this.pokeballs;
};return ModdedDex;}();


if(typeof require==='function'){

global.Dex=Dex;
global.toID=toID;
}