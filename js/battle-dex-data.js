/**
 * Pokemon Showdown Dex Data
 *
 * A collection of data and definitions for src/battle-dex.ts.
 *
 * Larger data has their own files in data/, so this is just for small
 * miscellaneous data that doesn't need its own file.
 *
 * Licensing note: PS's client has complicated licensing:
 * - The client as a whole is AGPLv3
 * - The battle replay/animation engine (battle-*.ts) by itself is MIT
 *
 * @author Guangcong Luo <guangcongluo@gmail.com>
 * @license MIT
 */






var BattleNatures={
Adamant:{
plus:'atk',
minus:'spa'},

Bashful:{},
Bold:{
plus:'def',
minus:'atk'},

Brave:{
plus:'atk',
minus:'spe'},

Calm:{
plus:'spd',
minus:'atk'},

Careful:{
plus:'spd',
minus:'spa'},

Docile:{},
Gentle:{
plus:'spd',
minus:'def'},

Hardy:{},
Hasty:{
plus:'spe',
minus:'def'},

Impish:{
plus:'def',
minus:'spa'},

Jolly:{
plus:'spe',
minus:'spa'},

Lax:{
plus:'def',
minus:'spd'},

Lonely:{
plus:'atk',
minus:'def'},

Mild:{
plus:'spa',
minus:'def'},

Modest:{
plus:'spa',
minus:'atk'},

Naive:{
plus:'spe',
minus:'spd'},

Naughty:{
plus:'atk',
minus:'spd'},

Quiet:{
plus:'spa',
minus:'spe'},

Quirky:{},
Rash:{
plus:'spa',
minus:'spd'},

Relaxed:{
plus:'def',
minus:'spe'},

Sassy:{
plus:'spd',
minus:'spe'},

Serious:{},
Timid:{
plus:'spe',
minus:'atk'}};


var BattleStatIDs={
HP:'hp',
hp:'hp',
Atk:'atk',
atk:'atk',
Def:'def',
def:'def',
SpA:'spa',
SAtk:'spa',
SpAtk:'spa',
spa:'spa',
spc:'spa',
Spc:'spa',
SpD:'spd',
SDef:'spd',
SpDef:'spd',
spd:'spd',
Spe:'spe',
Spd:'spe',
spe:'spe'};


var BattleStatNames={
hp:'HP',
atk:'Atk',
def:'Def',
spa:'SpA',
spd:'SpD',
spe:'Spe'};


var BattleBaseSpeciesChart=[
"unown","burmy","shellos","gastrodon","deerling","sawsbuck","vivillon","flabebe","floette","florges","furfrou","minior","alcremie","pokestarufo","pokestarbrycenman","pokestarmt","pokestarmt2","pokestartransport","pokestargiant","pokestarhumanoid","pokestarmonster","pokestarf00","pokestarf002","pokestarspirit","pokestarblackdoor","pokestarwhitedoor","pokestarblackbelt"];


var BattlePokemonIconIndexes={
egg:900+1,
pikachubelle:900+2,
pikachulibre:900+3,
pikachuphd:900+4,
pikachupopstar:900+5,
pikachurockstar:900+6,
pikachucosplay:900+7,
unownexclamation:900+8,
unownquestion:900+9,
unownb:900+10,
unownc:900+11,
unownd:900+12,
unowne:900+13,
unownf:900+14,
unowng:900+15,
unownh:900+16,
unowni:900+17,
unownj:900+18,
unownk:900+19,
unownl:900+20,
unownm:900+21,
unownn:900+22,
unowno:900+23,
unownp:900+24,
unownq:900+25,
unownr:900+26,
unowns:900+27,
unownt:900+28,
unownu:900+29,
unownv:900+30,
unownw:900+31,
unownx:900+32,
unowny:900+33,
unownz:900+34,
castformrainy:900+35,
castformsnowy:900+36,
castformsunny:900+37,
deoxysattack:900+38,
deoxysdefense:900+39,
deoxysspeed:900+40,
burmysandy:900+41,
burmytrash:900+42,
wormadamsandy:900+43,
wormadamtrash:900+44,
cherrimsunshine:900+45,
shelloseast:900+46,
gastrodoneast:900+47,
rotomfan:900+48,
rotomfrost:900+49,
rotomheat:900+50,
rotommow:900+51,
rotomwash:900+52,
giratinaorigin:900+53,
shayminsky:900+54,
unfezantf:900+55,
basculinbluestriped:900+56,
darmanitanzen:900+57,
deerlingautumn:900+58,
deerlingsummer:900+59,
deerlingwinter:900+60,
sawsbuckautumn:900+61,
sawsbucksummer:900+62,
sawsbuckwinter:900+63,
frillishf:900+64,
jellicentf:900+65,
tornadustherian:900+66,
thundurustherian:900+67,
landorustherian:900+68,
kyuremblack:900+69,
kyuremwhite:900+70,
keldeoresolute:900+71,
meloettapirouette:900+72,
vivillonarchipelago:900+73,
vivilloncontinental:900+74,
vivillonelegant:900+75,
vivillonfancy:900+76,
vivillongarden:900+77,
vivillonhighplains:900+78,
vivillonicysnow:900+79,
vivillonjungle:900+80,
vivillonmarine:900+81,
vivillonmodern:900+82,
vivillonmonsoon:900+83,
vivillonocean:900+84,
vivillonpokeball:900+85,
vivillonpolar:900+86,
vivillonriver:900+87,
vivillonsandstorm:900+88,
vivillonsavanna:900+89,
vivillonsun:900+90,
vivillontundra:900+91,
pyroarf:900+92,
flabebeblue:900+93,
flabebeorange:900+94,
flabebewhite:900+95,
flabebeyellow:900+96,
floetteblue:900+97,
floetteeternal:900+98,
floetteorange:900+99,
floettewhite:900+100,
floetteyellow:900+101,
florgesblue:900+102,
florgesorange:900+103,
florgeswhite:900+104,
florgesyellow:900+105,
furfroudandy:900+106,
furfroudebutante:900+107,
furfroudiamond:900+108,
furfrouheart:900+109,
furfroukabuki:900+110,
furfroulareine:900+111,
furfroumatron:900+112,
furfroupharaoh:900+113,
furfroustar:900+114,
meowsticf:900+115,
aegislashblade:900+116,
hoopaunbound:900+118,
rattataalola:900+119,
raticatealola:900+120,
raichualola:900+121,
sandshrewalola:900+122,
sandslashalola:900+123,
vulpixalola:900+124,
ninetalesalola:900+125,
diglettalola:900+126,
dugtrioalola:900+127,
meowthalola:900+128,
persianalola:900+129,
geodudealola:900+130,
graveleralola:900+131,
golemalola:900+132,
grimeralola:900+133,
mukalola:900+134,
exeggutoralola:900+135,
marowakalola:900+136,
greninjaash:900+137,
zygarde10:900+138,
zygardecomplete:900+139,
oricoriopompom:900+140,
oricoriopau:900+141,
oricoriosensu:900+142,
lycanrocmidnight:900+143,
wishiwashischool:900+144,
miniormeteor:900+145,
miniororange:900+146,
minioryellow:900+147,
miniorgreen:900+148,
miniorblue:900+149,
miniorindigo:900+150,
miniorviolet:900+151,
magearnaoriginal:900+152,
pikachuoriginal:900+153,
pikachuhoenn:900+154,
pikachusinnoh:900+155,
pikachuunova:900+156,
pikachukalos:900+157,
pikachualola:900+158,
pikachupartner:900+159,
lycanrocdusk:900+160,
necrozmaduskmane:900+161,
necrozmadawnwings:900+162,
necrozmaultra:900+163,
pikachustarter:900+164,
eeveestarter:900+165,
meowthgalar:900+166,
ponytagalar:900+167,
rapidashgalar:900+168,
farfetchdgalar:900+169,
weezinggalar:900+170,
mrmimegalar:900+171,
corsolagalar:900+172,
zigzagoongalar:900+173,
linoonegalar:900+174,
darumakagalar:900+175,
darmanitangalar:900+176,
darmanitangalarzen:900+177,
yamaskgalar:900+178,
stunfiskgalar:900+179,
cramorantgulping:900+180,
cramorantgorging:900+181,
toxtricitylowkey:900+182,
sinisteaantique:854,
polteageistantique:855,
alcremierubycream:900+183,
alcremiematchacream:900+184,
alcremiemintcream:900+185,
alcremielemoncream:900+186,
alcremiesaltedcream:900+187,
alcremierubyswirl:900+188,
alcremiecaramelswirl:900+189,
alcremierainbowswirl:900+190,
eiscuenoice:900+191,
indeedeef:900+192,
morpekohangry:900+193,
zaciancrowned:900+194,
zamazentacrowned:900+195,
slowpokegalar:900+196,
slowbrogalar:900+197,
zarudedada:900+198,
pikachuworld:900+199,
articunogalar:900+200,
zapdosgalar:900+201,
moltresgalar:900+202,
slowkinggalar:900+203,
calyrexice:900+204,
calyrexshadow:900+205,

gumshoostotem:735,
raticatealolatotem:900+120,
marowakalolatotem:900+136,
araquanidtotem:752,
lurantistotem:754,
salazzletotem:758,
vikavolttotem:738,
togedemarutotem:777,
mimikyutotem:778,
mimikyubustedtotem:778,
ribombeetotem:743,
kommoototem:784,

venusaurmega:1116+0,
charizardmegax:1116+1,
charizardmegay:1116+2,
blastoisemega:1116+3,
beedrillmega:1116+4,
pidgeotmega:1116+5,
alakazammega:1116+6,
slowbromega:1116+7,
gengarmega:1116+8,
kangaskhanmega:1116+9,
pinsirmega:1116+10,
gyaradosmega:1116+11,
aerodactylmega:1116+12,
mewtwomegax:1116+13,
mewtwomegay:1116+14,
ampharosmega:1116+15,
steelixmega:1116+16,
scizormega:1116+17,
heracrossmega:1116+18,
houndoommega:1116+19,
tyranitarmega:1116+20,
sceptilemega:1116+21,
blazikenmega:1116+22,
swampertmega:1116+23,
gardevoirmega:1116+24,
sableyemega:1116+25,
mawilemega:1116+26,
aggronmega:1116+27,
medichammega:1116+28,
manectricmega:1116+29,
sharpedomega:1116+30,
cameruptmega:1116+31,
altariamega:1116+32,
banettemega:1116+33,
absolmega:1116+34,
glaliemega:1116+35,
salamencemega:1116+36,
metagrossmega:1116+37,
latiasmega:1116+38,
latiosmega:1116+39,
kyogreprimal:1116+40,
groudonprimal:1116+41,
rayquazamega:1116+42,
lopunnymega:1116+43,
garchompmega:1116+44,
lucariomega:1116+45,
abomasnowmega:1116+46,
gallademega:1116+47,
audinomega:1116+48,
dianciemega:1116+49,
charizardgmax:1116+50,
butterfreegmax:1116+51,
pikachugmax:1116+52,
meowthgmax:1116+53,
machampgmax:1116+54,
gengargmax:1116+55,
kinglergmax:1116+56,
laprasgmax:1116+57,
eeveegmax:1116+58,
snorlaxgmax:1116+59,
garbodorgmax:1116+60,
melmetalgmax:1116+61,
corviknightgmax:1116+62,
orbeetlegmax:1116+63,
drednawgmax:1116+64,
coalossalgmax:1116+65,
flapplegmax:1116+66,
appletungmax:1116+67,
sandacondagmax:1116+68,
toxtricitygmax:1116+69,
toxtricitylowkeygmax:1116+69,
centiskorchgmax:1116+70,
hatterenegmax:1116+71,
grimmsnarlgmax:1116+72,
alcremiegmax:1116+73,
copperajahgmax:1116+74,
duraludongmax:1116+75,
eternatuseternamax:1116+76,
venusaurgmax:1116+77,
blastoisegmax:1116+78,
rillaboomgmax:1116+79,
cinderacegmax:1116+80,
inteleongmax:1116+81,
urshifugmax:1116+82,
urshifurapidstrikegmax:1116+83,

syclant:1308+0,
revenankh:1308+1,
pyroak:1308+2,
fidgit:1308+3,
stratagem:1308+4,
arghonaut:1308+5,
kitsunoh:1308+6,
cyclohm:1308+7,
colossoil:1308+8,
krilowatt:1308+9,
voodoom:1308+10,
tomohawk:1308+11,
necturna:1308+12,
mollux:1308+13,
aurumoth:1308+14,
malaconda:1308+15,
cawmodore:1308+16,
volkraken:1308+17,
plasmanta:1308+18,
naviathan:1308+19,
crucibelle:1308+20,
crucibellemega:1308+21,
kerfluffle:1308+22,
pajantom:1308+23,
jumbao:1308+24,
caribolt:1308+25,
smokomodo:1308+26,
snaelstrom:1308+27,
equilibra:1308+28,
astrolotl:1308+29,
miasmaw:1308+30,

syclar:1344+0,
embirch:1344+1,
flarelm:1344+2,
breezi:1344+3,
scratchet:1344+4,
necturine:1344+5,
cupra:1344+6,
argalis:1344+7,
brattler:1344+8,
cawdet:1344+9,
volkritter:1344+10,
snugglow:1344+11,
floatoy:1344+12,
caimanoe:1344+13,
pluffle:1344+14,
rebble:1344+15,
tactite:1344+16,
privatyke:1344+17,
nohface:1344+18,
monohm:1344+19,
duohm:1344+20,

voodoll:1344+22,
mumbao:1344+23,
fawnifer:1344+24,
electrelk:1344+25,
smogecko:1344+26,
smoguana:1344+27,
swirlpool:1344+28,
coribalis:1344+29,
justyke:1344+30,
solotl:1344+31,
miasmite:1344+32,

bulbasaurdelta:1380,
ivysaurdelta:1380+1,
venusaurdelta:1380+2,
venusaurdeltamega:1380+3,
charmanderdelta:1380+4,
charmeleondelta:1380+5,
charizarddelta:1380+6,
charizarddeltamega:1380+7,
squirtledelta:1380+8,
wartortledelta:1380+9,
blastoisedelta:1380+10,
blastoisedeltamega:1380+11,
pawniarddelta:1380+12,
bisharpdelta:1380+13,
bisharpdeltamega:1380+14,
raltsdelta:1380+15,
kirliadelta:1380+16,
gardevoirdelta:1380+17,
gardevoirdeltamega:1380+18,
galladedelta:1380+19,
galladedeltamega:1380+20,
sunkerndelta:1380+21,
sunfloradelta:1380+22,
sunfloradeltamega:1380+23,
bergmitedelta:1380+24,
avaluggdelta:1380+25,
scytherdelta:1380+26,
scizordelta:1380+27,
scizordeltamega:1380+28,
scraggydelta:1380+29,
scraftydelta:1380+30,
combeedelta:1380+31,
vespiquendelta:1380+32,
koffingdelta:1380+33,
weezingdelta:1380+34,
purrloindelta:1380+35,
lieparddelta:1380+36,
phantumpdelta:1380+37,
trevenantdelta:1380+38,
snoruntdelta:1380+39,
glaliedelta:1380+40,
glaliedeltamega:1380+41,
froslassdelta:1380+42,
froslassdeltamega:1380+43,
shinxdelta:1380+44,
luxiodelta:1380+45,
luxraydelta:1380+46,
noibatdelta:1380+47,
noiverndelta:1380+48,
budewdelta:1380+49,
roseliadelta:1380+50,
roseradedelta:1380+51,
drifbloondelta:1380+52,
drifblimdelta:1380+53,
grimerdelta:1380+54,
mukdelta:1380+55,
wooperdelta:1380+56,
quagsiredelta:1380+57,
munchlaxdelta:1380+58,
snorlaxdelta:1380+59,
misdreavusdelta:1380+60,
mismagiusdelta:1380+61,
cyndaquildelta:1380+62,
quilavadelta:1380+63,
typhlosiondelta:1380+64,
typhlosiondeltaactive:1380+65,
treeckodelta:1380+66,
grovyledelta:1380+67,
sceptiledelta:1380+68,
torchicdelta:1380+69,
combuskendelta:1380+70,
blazikendelta:1380+71,
turtwigdelta:1380+72,
grotledelta:1380+73,
torterradelta:1380+74,
snivydelta:1380+75,
servinedelta:1380+76,
serperiordelta:1380+77,
froakiedelta:1380+78,
frogdierdelta:1380+79,
greninjadelta:1380+80,
pidgeydelta:1380+81,
pidgeottodelta:1380+82,
pidgeotdelta:1380+83,
pidgeotdeltamega:1380+84,
diglettdelta:1380+85,
dugtriodelta:1380+86,
growlithedelta:1380+87,
arcaninedelta:1380+88,
geodudedelta:1380+89,
gravelerdelta:1380+90,
golemdelta:1380+91,
tentacooldelta:1380+92,
tentacrueldelta:1380+93,
doduodelta:1380+94,
dodriodelta:1380+95,
tangeladelta:1380+96,
tangrowthdelta:1380+97,
dittodelta:1380+98,
kabutodelta:1380+99,
kabutopsdelta:1380+100,
dratinidelta:1380+101,
dragonairdelta:1380+102,
dragonitedelta:1380+103,
hoothootdelta:1380+104,
noctowldelta:1380+105,
chinchoudelta:1380+106,
lanturndelta:1380+107,
pichudelta:1380+108,
pikachudelta:1380+109,
raichudelta:1380+110,
aipomdelta:1380+111,
ambipomdelta:1380+112,
yanmadelta:1380+113,
yanmegadelta:1380+114,
girafarigdelta:1380+115,
girafarigdeltamega:1380+116,
dunsparcedelta:1380+117,
shuckledelta:1380+118,
remoraiddelta:1380+119,
octillerydelta:1380+120,
elekiddelta:1380+121,
electabuzzdelta:1380+122,
electiviredelta:1380+123,
magbydelta:1380+124,
magmardelta:1380+125,
magmortardelta:1380+126,
lotaddelta:1380+127,
lombredelta:1380+128,
ludicolodelta:1380+129,
seedotdelta:1380+130,
nuzleafdelta:1380+131,
shiftrydelta:1380+132,
sableyedelta:1380+133,
sableyedeltamega:1380+134,
mawiledelta:1380+135,
mawiledeltamega:1380+136,
arondelta:1380+137,
lairondelta:1380+138,
aggrondelta:1380+139,
medititedelta:1380+140,
medichamdelta:1380+141,
medichamdeltamega:1380+142,
numeldelta:1380+143,
cameruptdelta:1380+144,
cameruptdeltamega:1380+145,
plusledelta:1380+146,
minundelta:1380+147,
wailmerdelta:1380+148,
wailorddelta:1380+149,
feebasdelta:1380+150,
miloticdelta:1380+151,
miloticdeltamega:1380+152,
clampearldelta:1380+153,
huntaildelta:1380+154,
gorebyssdelta:1380+155,
beldumdeltaspider:1380+156,
metangdeltaspider:1380+157,
metagrossdeltaspider:1380+158,
metagrossdeltaspidermega:1380+159,
beldumdeltaruin:1380+160,
metangdeltaruin:1380+161,
metagrossdeltaruin:1380+162,
metagrossdeltaruinmega:1380+163,
metagrossdeltaruincrystal:1380+164,
bunearydelta:1380+165,
lopunnydelta:1380+166,
lopunnydeltamega:1380+167,
rioludelta:1380+168,
lucariodelta:1380+169,
lucariodeltamega:1380+170,
croagunkdelta:1380+171,
toxicroakdelta:1380+172,
venipededelta:1380+173,
whirlipededelta:1380+174,
scolipededelta:1380+175,
petilildeltawater:1380+176,
lilligantdeltawater:1380+177,
petilildeltafairy:1380+178,
lilligantdeltafairy:1380+179,
solosisdelta:1380+180,
duosiondelta:1380+181,
reuniclusdelta:1380+182,
darumakadelta:1380+183,
darmanitandelta:1380+184,
maractusdelta:1380+185,
dwebbledeltaberry:1380+186,
crustledeltaberry:1380+187,
dwebbledeltacake:1380+188,
crustledeltacake:1380+189,
yamaskdelta:1380+190,
cofagrigusdelta:1380+191,
emolgadelta:1380+192,
emolgadeltablaze:1380+193,
karrablastdelta:1380+194,
escavalierdelta:1380+195,
foongusdelta:1380+196,
amoongussdelta:1380+197,
litwickdelta:1380+198,
lampentdelta:1380+199,
chandeluredelta:1380+200,
axewdelta:1380+201,
fraxuredelta:1380+202,
haxorusdelta:1380+203,
golettdelta:1380+204,
golurkdelta:1380+205,
heatmordelta:1380+206,
deinodelta:1380+207,
zweilousdelta:1380+208,
hydreigondelta:1380+209,
larvestadelta:1380+210,
volcaronadelta:1380+211,
volcaronadeltaarmored:1380+212,
amauradelta:1380+213,
aurorusdelta:1380+214,
goomydelta:1380+215,
sliggoodelta:1380+216,
goodradelta:1380+217,
regirockdelta:1380+218,
regicedelta:1380+219,
registeeldelta:1380+220,
meloettadelta:1380+221,
meloettadeltamagician:1380+222,
hoopadelta:1380+223,
hoopadeltaunleashed:1380+224,
ufi:1380+225,

poliwrathmega:1608,
marowakmega:1608+1,
eeveemega:1608+2,
meganiummega:1608+3,
typhlosionmega:1608+4,
feraligatrmega:1608+5,
sudowoodomega:1608+6,
politoedmega:1608+7,
sunfloramegaf:1608+8,
sunfloramegam:1608+8,
girafarigmega:1608+9,
steelixmegafire:1608+10,
magcargomega:1608+11,
donphanmega:1608+12,
miltankmega:1608+13,
shiftrymega:1608+14,
flygonmega:1608+15,
cacturnemega:1608+16,
crawdauntmega:1608+17,
miloticmega:1608+18,
jirachimega:1608+19,
chatotmega:1608+20,
spiritombmega:1608+21,
froslassmega:1608+22,
zebstrikamega:1608+23,
zoroarkmega:1608+24,
gothitellemega:1608+25,
reuniclusmega:1608+26,
cryogonalmega:1608+27,
haxorusmega:1608+28,
stunfiskmega:1608+29,
bisharpmega:1608+30,
hydreigonmega:1608+31,
hydreigonmegaa:1608+31,
hydreigonmegab:1608+31,
hydreigonmegac:1608+31,
hydreigonmegad:1608+31,

mewtwoarmored:1644,
mewtwoshadow:1644+1,
mewtwoshadowmega:1644+2,
tyranitararmored:1644+4,
flygonarmored:1644+5,
castformsandy:1644+6,
castformcloudy:1644+7,
regigigasprimal:1644+8,
giratinaprimal:1644+9,
arceusprimal:1644+10,
leavannyarmored:1644+11,
zekromarmored:1644+12,
metalynx:1644+13,
metalynxmega:1644+13,
archilles:1644+14,
archillesmega:1644+14,
electruxo:1644+15,
electruxomega:1644+15,
kinetmunk:1644+16,
splendifowl:1644+17,
nimflora:1644+18,
gararewl:1644+19,
terlard:1644+20,
tofurang:1644+21,
dunseraph:1644+22,
blubelrog:1644+23,
feliger:1644+24,
empirilla:1644+25,
eshouten:1644+26,
firoke:1644+27,
brainoar:1644+28,
tanscure:1644+29,
sponaree:1644+30,
pajay:1644+31,
jerbolta:1644+32,
astronite:1644+33,
baariette:1644+34,
baariettemega:1644+34,
harylect:1644+35,
trawpint:1644+36,
herolune:1644+37,
vilucard:1644+38,
drilgann:1644+39,
drilgannmega:1644+39,
cocancer:1644+40,
corsoreef:1644+41,
tubareel:1644+42,
escartress:1644+43,
gellin:1644+44,
glavinug:1644+45,
s51:1644+46,
s51mega:1644+46,
paraboom:1644+47,
inflagetah:1644+48,
inflagetahmega:1644+48,
chimaconda:1644+49,
frikitiki:1644+50,
harptera:1644+51,
coatlith:1644+52,
tracton:1644+53,
dermafrost:1644+54,
theriamp:1644+55,
titanice:1644+56,
daikatuna:1644+57,
syrentide:1644+58,
syrentidemega:1644+58,
miasmedic:1644+59,
winotinger:1644+60,
duplicat:1644+61,
raffiti:1644+62,
gargryph:1644+63,
dramsama:1644+64,
dramsamamega:1644+64,
antarki:1644+65,
luchabra:1644+66,
chainite:1644+67,
alpico:1644+68,
anderind:1644+69,
frosthra:1644+70,
fafninter:1644+71,
krilvolver:1644+72,
lavent:1644+73,
navighast:1644+74,
stenowatt:1644+75,
majungold:1644+76,
haagross:1644+77,
kiricorn:1644+78,
kiricornmega:1644+78,
oblivicorn:1644+79,
luxelong:1644+80,
praseopunk:1644+81,
neopunk:1644+82,
laissure:1644+83,
yatagaryu:1644+84,
beliaddon:1644+85,
seikamater:1644+86,
garlikid:1644+87,
lanthan:1644+88,
actan:1644+89,
registeelhf:1644+90,
regicehf:1644+91,
regirockhf:1644+92,
accelgorhf:1644+93,
dragalgehf:1644+94,
zebstrikahf:1644+95,
tentacruelhf:1644+96,
musharnahf:1644+97,
dustoxhf:1644+98,
glaliehf:1644+99,
glaliehfmega:1644+100,
altariahf:1644+101,
altariahfmega:1644+102,
sharpedohf:1644+103,
sharpedohfmega:1644+104,
sceptilehf:1644+105,
sceptilehfmega:1644+106,
goodrahf:1644+107,
golemhf:1644+108,
vespiquenhf:1644+109,
victreebelhf:1644+110,
trevenanthf:1644+111,
dusclopshf:1644+112,
dusknoirhf:1644+113,
ponytahf:1644+114,
rapidashf:1644+115,
gigalithhf:1644+116,
qwilfishhf:1644+117,
sawsbuckhf:1644+118,
zoroarkhf:1644+119,
slakinghf:1644+120,
arcaninehf:1644+121,
jolteonhf:1644+122,
jolteonhfcorrupt:1644+123,
kabutopshf:1644+124,
phospheon:1644+125,
blaneon:1644+126,
aromeon:1644+127,
fureon:1644+128,
dynameon:1644+129,
radeon:1644+130,
obsideon:1644+131,
frosteon:1644+132,
blizzeon:1644+133,
eclipseon:1644+134,
cindereon:1644+135,
zereon:1644+136,
pulseon:1644+137,
pineon:1644+138,
mooreon:1644+139,
noctiveon:1644+140,
devileon:1644+141,
murkeon:1644+142,
isycleon:1644+143,
staticeon:1644+144,
sandridger:1644+145,
floressum:1644+146,
flairees:1644+147,
aguanaut:1644+148,
warquila:1644+149,
capabara:1644+150,
avalynx:1644+151,
buckston:1644+152,
penglacier:1644+153,
burrmudail:1644+154,
koberus:1644+155,
kobalt:1644+156,
gigaard:1644+157,
cowatti:1644+158,
snogre:1644+159,
orangutao:1644+160,
caranox:1644+161,
carajoule:1644+162,
caracrust:1644+163,
musbushel:1644+164,
berratel:1644+165,
montegrew:1644+166,
capulilly:1644+167,
breamdery:1644+168,
macabra:1644+169,
volcoalder:1644+170,
jaguile:1644+171,
cerebrulb:1644+172,
scovalope:1644+173,
hurricanine:1644+174,
mortasque:1644+175,
vectol2:1644+176,
scubug:1644+177,
lutrajet:1644+178,
forusk:1644+179,
platikhao:1644+180,
fettlekish:1644+181,
shibalbat:1644+182,
nobunata:1644+183,
gnuru:1644+184,
gullotus:1644+185,
burrowl:1644+186,
magowl:1644+187,
crawglock:1644+188,
chlorofin:1644+189,
turkistador:1644+190,
condesa:1644+191,
chardinal:1644+192,
skurrow:1644+193,
somberado:1644+194,
fumighast:1644+195,
orbatom:1644+196,
squidrift:1644+197,
boarealis:1644+198,
galaxagos:1644+199,
magnitogre:1644+200,
trenchula:1644+201,
terrorcotta:1644+202,
cahokisect:1644+203,
charmbra:1644+204,
kairoglyph:1644+205,
gravollum:1644+206,
pangolash:1644+207,
flarrapin:1644+208,
vultergyst:1644+209,
dunkywunkr:1644+210,
indrolith:1644+211,
solacari:1644+212,
nurshary:1644+213,
forthorn:1644+214,
fantasmare:1644+215,
howlequin:1644+216,
cheshade:1644+217,
artifish:1644+218,
thoraxe:1644+219,
hyekuza:1644+220,
leukoon:1644+221,
sanquito:1644+222,
magroplex:1644+223,
soakoth:1644+224,
macuarrior:1644+225,
ocerumi:1644+226,
oarwish:1644+227,
smashiary:1644+228,
chameleohm:1644+229,
hydranticus:1644+230,
paramoth:1644+231,
mawasite:1644+232,
monkezuma:1644+233,
enigmantis:1644+234,
royjibiv:1644+235,
jawgodon:1644+236,
sunduke:1644+237,
phantern:1644+238,
lavoon:1644+239,
akillosore:1644+240,
dilophlora:1644+241,
baboom:1644+242,
chillnobyl:1644+243,
carnibal:1644+244,
eluchadon:1644+245,
comossus:1644+246,
basilect:1644+247,
diamat:1644+248,
tozecko:1644+249,
fuelong:1644+250,
ragnarow:1644+251,
eronze:1644+252,
erion:1644+253,
erace:1644+254,
patama:1644+255,
machima:1644+256,
yacuma:1644+257,
quetzar:1644+258,
quetzarspace:1644+259,
xochi:1644+260,
xotec:1644+261};

var BattlePokemonIconIndexesLeft={
pikachubelle:1200+0,
pikachupopstar:1200+1,
clefairy:1200+2,
clefable:1200+3,
jigglypuff:1200+4,
wigglytuff:1200+5,
dugtrioalola:1200+6,
poliwhirl:1200+7,
poliwrath:1200+8,
mukalola:1200+9,
kingler:1200+10,
croconaw:1200+11,
cleffa:1200+12,
igglybuff:1200+13,
politoed:1200+14,
unownb:1200+15,
unownc:1200+16,
unownd:1200+17,
unowne:1200+18,
unownf:1200+19,
unowng:1200+20,
unownh:1200+21,
unownj:1200+22,
unownk:1200+23,
unownl:1200+24,
unownm:1200+25,
unownn:1200+26,
unownp:1200+27,
unownq:1200+28,
unownquestion:1200+29,
unownr:1200+30,
unowns:1200+31,
unownt:1200+32,
unownv:1200+33,
unownz:1200+34,
sneasel:1200+35,
teddiursa:1200+36,
roselia:1200+37,
zangoose:1200+38,
seviper:1200+39,
castformsnowy:1200+40,
absolmega:1200+41,
absol:1200+42,
regirock:1200+43,
torterra:1200+44,
budew:1200+45,
roserade:1200+46,
magmortar:1200+47,
togekiss:1200+48,
rotomwash:1200+49,
shayminsky:1200+50,
emboar:1200+51,
pansear:1200+52,
simisear:1200+53,
drilbur:1200+54,
excadrill:1200+55,
sawk:1200+56,
lilligant:1200+57,
garbodor:1200+58,
solosis:1200+59,
vanilluxe:1200+60,
amoonguss:1200+61,
klink:1200+62,
klang:1200+63,
klinklang:1200+64,
litwick:1200+65,
golett:1200+66,
golurk:1200+67,
kyuremblack:1200+68,
kyuremwhite:1200+69,
kyurem:1200+70,
keldeoresolute:1200+71,
meloetta:1200+72,
greninja:1200+73,
greninjaash:1200+74,
furfroudebutante:1200+75,
barbaracle:1200+76,
clauncher:1200+77,
clawitzer:1200+78,
sylveon:1200+79,
klefki:1200+80,
zygarde:1200+81,
zygarde10:1200+82,
zygardecomplete:1200+83,
dartrix:1200+84,
steenee:1200+85,
tsareena:1200+86,
comfey:1200+87,
miniormeteor:1200+88,
minior:1200+89,
miniororange:1200+90,
minioryellow:1200+91,
miniorgreen:1200+92,
miniorblue:1200+93,
miniorviolet:1200+94,
miniorindigo:1200+95,
dhelmise:1200+96,
necrozma:1200+97,
marshadow:1200+98,
pikachuoriginal:1200+99,
pikachupartner:1200+100,
necrozmaduskmane:1200+101,
necrozmadawnwings:1200+102,
necrozmaultra:1200+103,
stakataka:1200+104,
blacephalon:1200+105};


var BattleAvatarNumbers={
1:'lucas',
2:'dawn',
3:'youngster-gen4',
4:'lass-gen4dp',
5:'camper',
6:'picnicker',
7:'bugcatcher',
8:'aromalady',
9:'twins-gen4dp',
10:'hiker-gen4',
11:'battlegirl-gen4',
12:'fisherman-gen4',
13:'cyclist-gen4',
14:'cyclistf-gen4',
15:'blackbelt-gen4dp',
16:'artist-gen4',
17:'pokemonbreeder-gen4',
18:'pokemonbreederf-gen4',
19:'cowgirl',
20:'jogger',
21:'pokefan-gen4',
22:'pokefanf-gen4',
23:'pokekid',
24:'youngcouple-gen4dp',
25:'acetrainer-gen4dp',
26:'acetrainerf-gen4dp',
27:'waitress-gen4',
28:'veteran-gen4',
29:'ninjaboy',
30:'dragontamer',
31:'birdkeeper-gen4dp',
32:'doubleteam',
33:'richboy-gen4',
34:'lady-gen4',
35:'gentleman-gen4dp',
36:'madame-gen4dp',
37:'beauty-gen4dp',
38:'collector',
39:'policeman-gen4',
40:'pokemonranger-gen4',
41:'pokemonrangerf-gen4',
42:'scientist-gen4dp',
43:'swimmer-gen4dp',
44:'swimmerf-gen4dp',
45:'tuber',
46:'tuberf',
47:'sailor',
48:'sisandbro',
49:'ruinmaniac',
50:'psychic-gen4',
51:'psychicf-gen4',
52:'gambler',
53:'guitarist-gen4',
54:'acetrainersnow',
55:'acetrainersnowf',
56:'skier',
57:'skierf-gen4dp',
58:'roughneck-gen4',
59:'clown',
60:'worker-gen4',
61:'schoolkid-gen4dp',
62:'schoolkidf-gen4',
63:'roark',
64:'barry',
65:'byron',
66:'aaron',
67:'bertha',
68:'flint',
69:'lucian',
70:'cynthia-gen4',
71:'bellepa',
72:'rancher',
73:'mars',
74:'galacticgrunt',
75:'gardenia',
76:'crasherwake',
77:'maylene',
78:'fantina',
79:'candice',
80:'volkner',
81:'parasollady-gen4',
82:'waiter-gen4dp',
83:'interviewers',
84:'cameraman',
85:'reporter',
86:'idol',
87:'cyrus',
88:'jupiter',
89:'saturn',
90:'galacticgruntf',
91:'argenta',
92:'palmer',
93:'thorton',
94:'buck',
95:'darach',
96:'marley',
97:'mira',
98:'cheryl',
99:'riley',
100:'dahlia',
101:'ethan',
102:'lyra',
103:'twins-gen4',
104:'lass-gen4',
105:'acetrainer-gen4',
106:'acetrainerf-gen4',
107:'juggler',
108:'sage',
109:'li',
110:'gentleman-gen4',
111:'teacher',
112:'beauty',
113:'birdkeeper',
114:'swimmer-gen4',
115:'swimmerf-gen4',
116:'kimonogirl',
117:'scientist-gen4',
118:'acetrainercouple',
119:'youngcouple',
120:'supernerd',
121:'medium',
122:'schoolkid-gen4',
123:'blackbelt-gen4',
124:'pokemaniac',
125:'firebreather',
126:'burglar',
127:'biker-gen4',
128:'skierf',
129:'boarder',
130:'rocketgrunt',
131:'rocketgruntf',
132:'archer',
133:'ariana',
134:'proton',
135:'petrel',
136:'eusine',
137:'lucas-gen4pt',
138:'dawn-gen4pt',
139:'madame-gen4',
140:'waiter-gen4',
141:'falkner',
142:'bugsy',
143:'whitney',
144:'morty',
145:'chuck',
146:'jasmine',
147:'pryce',
148:'clair',
149:'will',
150:'koga',
151:'bruno',
152:'karen',
153:'lance',
154:'brock',
155:'misty',
156:'ltsurge',
157:'erika',
158:'janine',
159:'sabrina',
160:'blaine',
161:'blue',
162:'red',
163:'red',
164:'silver',
165:'giovanni',
166:'unknownf',
167:'unknown',
168:'unknown',
169:'hilbert',
170:'hilda',
171:'youngster',
172:'lass',
173:'schoolkid',
174:'schoolkidf',
175:'smasher',
176:'linebacker',
177:'waiter',
178:'waitress',
179:'chili',
180:'cilan',
181:'cress',
182:'nurseryaide',
183:'preschoolerf',
184:'preschooler',
185:'twins',
186:'pokemonbreeder',
187:'pokemonbreederf',
188:'lenora',
189:'burgh',
190:'elesa',
191:'clay',
192:'skyla',
193:'pokemonranger',
194:'pokemonrangerf',
195:'worker',
196:'backpacker',
197:'backpackerf',
198:'fisherman',
199:'musician',
200:'dancer',
201:'harlequin',
202:'artist',
203:'baker',
204:'psychic',
205:'psychicf',
206:'cheren',
207:'bianca',
208:'plasmagrunt-gen5bw',
209:'n',
210:'richboy',
211:'lady',
212:'pilot',
213:'workerice',
214:'hoopster',
215:'scientistf',
216:'clerkf',
217:'acetrainerf',
218:'acetrainer',
219:'blackbelt',
220:'scientist',
221:'striker',
222:'brycen',
223:'iris',
224:'drayden',
225:'roughneck',
226:'janitor',
227:'pokefan',
228:'pokefanf',
229:'doctor',
230:'nurse',
231:'hooligans',
232:'battlegirl',
233:'parasollady',
234:'clerk',
235:'clerk-boss',
236:'backers',
237:'backersf',
238:'veteran',
239:'veteranf',
240:'biker',
241:'infielder',
242:'hiker',
243:'madame',
244:'gentleman',
245:'plasmagruntf-gen5bw',
246:'shauntal',
247:'marshal',
248:'grimsley',
249:'caitlin',
250:'ghetsis-gen5bw',
251:'depotagent',
252:'swimmer',
253:'swimmerf',
254:'policeman',
255:'maid',
256:'ingo',
257:'alder',
258:'cyclist',
259:'cyclistf',
260:'cynthia',
261:'emmet',
262:'hilbert-dueldisk',
263:'hilda-dueldisk',
264:'hugh',
265:'rosa',
266:'nate',
267:'colress',
268:'beauty-gen5bw2',
269:'ghetsis',
270:'plasmagrunt',
271:'plasmagruntf',
272:'iris-gen5bw2',
273:'brycenman',
274:'shadowtriad',
275:'rood',
276:'zinzolin',
277:'cheren-gen5bw2',
278:'marlon',
279:'roxie',
280:'roxanne',
281:'brawly',
282:'wattson',
283:'flannery',
284:'norman',
285:'winona',
286:'tate',
287:'liza',
288:'juan',
289:'guitarist',
290:'steven',
291:'wallace',
292:'bellelba',
293:'benga',
294:'ash',
'#bw2elesa':'elesa-gen5bw2',
'#teamrocket':'teamrocket',
'#yellow':'yellow',
'#zinnia':'zinnia',
'#clemont':'clemont',
'#wally':'wally',
breeder:'pokemonbreeder',
breederf:'pokemonbreederf',

1001:'#1001',
1002:'#1002',
1003:'#1003',
1005:'#1005',
1010:'#1010'};var

























PureEffect=





function PureEffect(id,name){this.effectType='PureEffect';
this.id=id;
this.name=name;
this.gen=0;
this.exists=false;
};var


Item=


























function Item(id,name,data){this.effectType='Item';
if(!data||typeof data!=='object')data={};
if(data.name)name=data.name;
this.name=Dex.sanitizeName(name);
this.id=id;
this.gen=data.gen||0;
this.exists='exists'in data?!!data.exists:true;

this.num=data.num||0;
this.spritenum=data.spritenum||0;
this.desc=data.desc||data.shortDesc||'';
this.shortDesc=data.shortDesc||this.desc;

this.megaStone=data.megaStone||'';
this.megaEvolves=data.megaEvolves||'';
this.zMove=data.zMove||null;
this.zMoveType=data.zMoveType||'';
this.zMoveFrom=data.zMoveFrom||'';
this.zMoveUser=data.zMoveUser||null;
this.onPlate=data.onPlate||'';
this.onMemory=data.onMemory||'';
this.onDrive=data.onDrive||'';
this.fling=data.fling||null;
this.naturalGift=data.naturalGift||null;
this.isPokeball=!!data.isPokeball;
this.itemUser=data.itemUser;

if(!this.gen){
if(this.num>=577){
this.gen=6;
}else if(this.num>=537){
this.gen=5;
}else if(this.num>=377){
this.gen=4;
}else{
this.gen=3;
}
}
};var




















































Move=





































function Move(id,name,data){var _this$maxMove;this.effectType='Move';
if(!data||typeof data!=='object')data={};
if(data.name)name=data.name;
this.name=Dex.sanitizeName(name);
this.id=id;
this.gen=data.gen||0;
this.exists='exists'in data?!!data.exists:true;

this.basePower=data.basePower||0;
this.accuracy=data.accuracy||0;
this.pp=data.pp||1;
this.type=data.type||'???';
this.category=data.category||'Physical';
this.priority=data.priority||0;
this.target=data.target||'normal';
this.flags=data.flags||{};
this.critRatio=data.critRatio===0?0:data.critRatio||1;


this.desc=data.desc;
this.shortDesc=data.shortDesc;
this.isNonstandard=data.isNonstandard||null;
this.isZ=data.isZ||'';
this.zMove=data.zMove||{};
this.ohko=data.ohko||null;
this.recoil=data.recoil||null;
this.heal=data.heal||null;
this.multihit=data.multihit||null;
this.hasCrashDamage=data.hasCrashDamage||false;
this.noPPBoosts=data.noPPBoosts||false;
this.secondaries=data.secondaries||(data.secondary?[data.secondary]:null);

this.isMax=data.isMax||false;
this.maxMove=data.maxMove||{basePower:0};
if(this.category!=='Status'&&!((_this$maxMove=this.maxMove)!=null&&_this$maxMove.basePower)){
if(this.isZ||this.isMax){
this.maxMove={basePower:1};
}else if(!this.basePower){
this.maxMove={basePower:100};
}else if(['Fighting','Poison'].includes(this.type)){
if(this.basePower>=150){
this.maxMove={basePower:100};
}else if(this.basePower>=110){
this.maxMove={basePower:95};
}else if(this.basePower>=75){
this.maxMove={basePower:90};
}else if(this.basePower>=65){
this.maxMove={basePower:85};
}else if(this.basePower>=55){
this.maxMove={basePower:80};
}else if(this.basePower>=45){
this.maxMove={basePower:75};
}else{
this.maxMove={basePower:70};
}
}else{
if(this.basePower>=150){
this.maxMove={basePower:150};
}else if(this.basePower>=110){
this.maxMove={basePower:140};
}else if(this.basePower>=75){
this.maxMove={basePower:130};
}else if(this.basePower>=65){
this.maxMove={basePower:120};
}else if(this.basePower>=55){
this.maxMove={basePower:110};
}else if(this.basePower>=45){
this.maxMove={basePower:100};
}else{
this.maxMove={basePower:90};
}
}
}

if(this.category!=='Status'&&!this.isZ&&!this.isMax){
var basePower=this.basePower;
this.zMove={};
if(Array.isArray(this.multihit))basePower*=3;
if(!basePower){
this.zMove.basePower=100;
}else if(basePower>=140){
this.zMove.basePower=200;
}else if(basePower>=130){
this.zMove.basePower=195;
}else if(basePower>=120){
this.zMove.basePower=190;
}else if(basePower>=110){
this.zMove.basePower=185;
}else if(basePower>=100){
this.zMove.basePower=180;
}else if(basePower>=90){
this.zMove.basePower=175;
}else if(basePower>=80){
this.zMove.basePower=160;
}else if(basePower>=70){
this.zMove.basePower=140;
}else if(basePower>=60){
this.zMove.basePower=120;
}else{
this.zMove.basePower=100;
}
}

this.num=data.num||0;
if(!this.gen){
if(this.num>=560){
this.gen=6;
}else if(this.num>=468){
this.gen=5;
}else if(this.num>=355){
this.gen=4;
}else if(this.num>=252){
this.gen=3;
}else if(this.num>=166){
this.gen=2;
}else if(this.num>=1){
this.gen=1;
}
}
};var


Ability=














function Ability(id,name,data){this.effectType='Ability';
if(!data||typeof data!=='object')data={};
if(data.name)name=data.name;
this.name=Dex.sanitizeName(name);
this.id=id;
this.gen=data.gen||0;
this.exists='exists'in data?!!data.exists:true;
this.num=data.num||0;
this.shortDesc=data.shortDesc||data.desc||'';
this.desc=data.desc||data.shortDesc||'';
this.rating=data.rating||1;
this.isNonstandard=!!data.isNonstandard;
if(!this.gen){
if(this.num>=234){
this.gen=8;
}else if(this.num>=192){
this.gen=7;
}else if(this.num>=165){
this.gen=6;
}else if(this.num>=124){
this.gen=5;
}else if(this.num>=77){
this.gen=4;
}else if(this.num>=1){
this.gen=3;
}
}
};var


Species=





















































function Species(id,name,data){this.effectType='Species';
if(!data||typeof data!=='object')data={};
if(data.name)name=data.name;
this.name=Dex.sanitizeName(name);
this.id=id;
this.gen=data.gen||0;
this.exists='exists'in data?!!data.exists:true;
this.baseSpecies=data.baseSpecies||name;
this.forme=data.forme||'';
var baseId=toID(this.baseSpecies);
this.formeid=baseId===this.id?'':'-'+toID(this.forme);
this.spriteid=baseId+this.formeid;
if(this.spriteid.slice(-5)==='totem')this.spriteid=this.spriteid.slice(0,-5);
if(this.spriteid.slice(-1)==='-')this.spriteid=this.spriteid.slice(0,-1);
this.baseForme=data.baseForme||'';

this.num=data.num||0;
this.types=data.types||['???'];
this.abilities=data.abilities||{0:"No Ability"};
this.baseStats=data.baseStats||{hp:0,atk:0,def:0,spa:0,spd:0,spe:0};
this.weightkg=data.weightkg||0;

this.heightm=data.heightm||0;
this.gender=data.gender||'';
this.color=data.color||'';
this.genderRatio=data.genderRatio||null;
this.eggGroups=data.eggGroups||[];

this.otherFormes=data.otherFormes||null;
this.cosmeticFormes=data.cosmeticFormes||null;
this.evos=data.evos||null;
this.prevo=data.prevo||'';
this.evoType=data.evoType||'';
this.evoLevel=data.evoLevel||0;
this.evoMove=data.evoMove||'';
this.evoItem=data.evoItem||'';
this.evoCondition=data.evoCondition||'';
this.requiredItem=data.requiredItem||'';
this.tier=data.tier||'';

this.isTotem=false;
this.isMega=false;
this.canGigantamax=!!data.canGigantamax;
this.isPrimal=false;
this.battleOnly=data.battleOnly||undefined;
this.isNonstandard=data.isNonstandard||null;
this.unreleasedHidden=data.unreleasedHidden||false;
this.changesFrom=data.changesFrom||undefined;
if(!this.gen){
if(this.num>=810||this.formeid.startsWith('-galar')){
this.gen=8;
}else if(this.num>=722||this.formeid==='-alola'||this.formeid==='-starter'){
this.gen=7;
}else if(this.forme&&['-mega','-megax','-megay'].includes(this.formeid)){
this.gen=6;
this.isMega=true;
this.battleOnly=this.baseSpecies;
}else if(this.formeid==='-primal'){
this.gen=6;
this.isPrimal=true;
this.battleOnly=this.baseSpecies;
}else if(this.formeid==='-totem'||this.formeid==='-alolatotem'){
this.gen=7;
this.isTotem=true;
}else if(this.num>=650){
this.gen=6;
}else if(this.num>=494){
this.gen=5;
}else if(this.num>=387){
this.gen=4;
}else if(this.num>=252){
this.gen=3;
}else if(this.num>=152){
this.gen=2;
}else if(this.num>=1){
this.gen=1;
}
}
};


if(typeof require==='function'){

global.BattleBaseSpeciesChart=BattleBaseSpeciesChart;
global.BattleNatures=BattleNatures;
global.PureEffect=PureEffect;
global.Species=Species;
global.Ability=Ability;
global.Item=Item;
global.Move=Move;
}
//# sourceMappingURL=battle-dex-data.js.map
