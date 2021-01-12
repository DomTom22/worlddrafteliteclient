/* 
optional data:
customTiers - these are auto-detected by the script, but you can set them here to ensure they show up in the right order
excludeStandardTiers - set to true if you want only your custom tiers to show up for the format
*/
const ModConfigData = {
	ClientMods: {
		'cleanslate': {
			'excludeStandardTiers': true,
		},
		'cleanslatemicro': {
			'excludeStandardTiers': true,
		},
		'cleanslate2': {
			'excludeStandardTiers': true,
		},
		'csts': {
			'customTiers': ['CS1', 'CSM', 'CS2'],
			'excludeStandardTiers': true,
		},
		'roulettemons': {
			'excludeStandardTiers': true,
		},
		'sylvemonstest': {},
		'ccapm2020': {},
		'optimons': {},
		'megamax': {},
		'm4av6': {},
		'perfectgalar': {},
		'gen7dlcmons': {},
		'fealpha': {
			'excludeStandardTiers': true,
		},
		'viabilities': {},
		'breedingvariants': {},
		'abnormal': {},
		'crossoverchaos': {},
		'pkmnyb': {},
		'twisted': {},
		'roseredirisblue': {},
		'prism': {
			'ignoreEVLimits': true,
		},
		'smashmodsmelee': {
			'excludeStandardTiers': true,
		},
		'breakthisteam': {},
	}
};
exports.ModConfigData = ModConfigData;