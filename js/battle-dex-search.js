function _inheritsLoose(subClass,superClass){subClass.prototype=Object.create(superClass.prototype);subClass.prototype.constructor=subClass;subClass.__proto__=superClass;}/**
 * Search
 *
 * Code for searching for dex information, used by the Dex and
 * Teambuilder.
 *
 * Dependencies: battledata, search-index
 * Optional dependencies: pokedex, moves, items, abilities
 *
 * @author Guangcong Luo <guangcongluo@gmail.com>
 * @license MIT
 */var




















DexSearch=function(){

















































function DexSearch(){var searchType=arguments.length>0&&arguments[0]!==undefined?arguments[0]:'';var formatid=arguments.length>1&&arguments[1]!==undefined?arguments[1]:'';var species=arguments.length>2&&arguments[2]!==undefined?arguments[2]:'';this.query='';this.dex=Dex;this.typedSearch=null;this.results=null;this.exactMatch=false;this.firstPokemonColumn='Number';this.sortCol=null;this.filters=null;
this.setType(searchType,formatid,species);
if(window.room.curTeam.mod)this.dex=Dex.mod(window.room.curTeam.mod);
}var _proto=DexSearch.prototype;_proto.

getTypedSearch=function getTypedSearch(searchType){var format=arguments.length>1&&arguments[1]!==undefined?arguments[1]:'';var speciesOrSet=arguments.length>2&&arguments[2]!==undefined?arguments[2]:'';
if(!searchType)return null;
switch(searchType){
case'pokemon':return new BattlePokemonSearch('pokemon',format,speciesOrSet);
case'item':return new BattleItemSearch('item',format,speciesOrSet);
case'move':return new BattleMoveSearch('move',format,speciesOrSet);
case'ability':return new BattleAbilitySearch('ability',format,speciesOrSet);
case'type':return new BattleTypeSearch('type',format,speciesOrSet);
case'category':return new BattleCategorySearch('category',format,speciesOrSet);}

return null;
};_proto.

find=function find(query){
query=toID(query);
if(this.query===query&&this.results){
return false;
}
this.query=query;
if(!query){var _this$typedSearch;
this.results=((_this$typedSearch=this.typedSearch)==null?void 0:_this$typedSearch.getResults(this.filters,this.sortCol))||[];
}else{
this.results=this.textSearch(query);
}
return true;
};_proto.

setType=function setType(searchType){var _this$typedSearch2;var format=arguments.length>1&&arguments[1]!==undefined?arguments[1]:'';var speciesOrSet=arguments.length>2&&arguments[2]!==undefined?arguments[2]:'';

this.results=null;

if(searchType!==((_this$typedSearch2=this.typedSearch)==null?void 0:_this$typedSearch2.searchType)){
this.filters=null;
this.sortCol=null;
}
this.typedSearch=this.getTypedSearch(searchType,format,speciesOrSet);
if(this.typedSearch)this.dex=this.typedSearch.dex;
};_proto.

addFilter=function addFilter(entry){
if(!this.typedSearch)return false;var
type=entry[0];
if(this.typedSearch.searchType==='pokemon'){
if(type===this.sortCol)this.sortCol=null;
if(!['type','move','ability','egggroup','tier'].includes(type))return false;
if(type==='move')entry[1]=toID(entry[1]);
if(!this.filters)this.filters=[];
this.results=null;for(var _i=0,_this$filters=
this.filters;_i<_this$filters.length;_i++){var _filter=_this$filters[_i];
if(_filter[0]===type&&_filter[1]===entry[1]){
return true;
}
}
this.filters.push(entry);
return true;
}else if(this.typedSearch.searchType==='move'){
if(type===this.sortCol)this.sortCol=null;
if(!['type','category','pokemon'].includes(type))return false;
if(type==='pokemon')entry[1]=toID(entry[1]);
if(!this.filters)this.filters=[];
this.filters.push(entry);
this.results=null;
return true;
}
return false;
};_proto.

removeFilter=function removeFilter(entry){
if(!this.filters)return false;
if(entry){
var filterid=entry.join(':');
var deleted=null;

for(var i=0;i<this.filters.length;i++){
if(filterid===this.filters[i].join(':')){
deleted=this.filters[i];
this.filters.splice(i,1);
break;
}
}
if(!deleted)return false;
}else{
this.filters.pop();
}
if(!this.filters.length)this.filters=null;
this.results=null;
return true;
};_proto.

toggleSort=function toggleSort(sortCol){
if(this.sortCol===sortCol){
this.sortCol=null;
}else{
this.sortCol=sortCol;
}
this.results=null;
};_proto.

filterLabel=function filterLabel(filterType){
if(this.typedSearch&&this.typedSearch.searchType!==filterType){
return'Filter';
}
return null;
};_proto.
illegalLabel=function illegalLabel(id){var _this$typedSearch3,_this$typedSearch3$il;
return((_this$typedSearch3=this.typedSearch)==null?void 0:(_this$typedSearch3$il=_this$typedSearch3.illegalReasons)==null?void 0:_this$typedSearch3$il[id])||null;
};_proto.

getTier=function getTier(species){var _this$typedSearch4;
return((_this$typedSearch4=this.typedSearch)==null?void 0:_this$typedSearch4.getTier(species))||'';
};_proto.

textSearch=function textSearch(query){var _this$typedSearch5,_this$typedSearch6;
query=toID(query);

this.exactMatch=false;
var searchType=((_this$typedSearch5=this.typedSearch)==null?void 0:_this$typedSearch5.searchType)||'';




var searchTypeIndex=searchType?DexSearch.typeTable[searchType]:-1;


var qFilterType='';
if(query.slice(-4)==='type'){
if(query.charAt(0).toUpperCase()+query.slice(1,-4)in window.BattleTypeChart){
query=query.slice(0,-4);
qFilterType='type';
}
}


var i=DexSearch.getClosest(query);
this.exactMatch=BattleSearchIndex[i][0]===query;







var passType='';


















var searchPasses=[['normal',i,query]];



if(query.length>1)searchPasses.push(['alias',i,query]);





var queryAlias;
if(query in BattleAliases){
if(['sub','tr'].includes(query)||toID(BattleAliases[query]).slice(0,query.length)!==query){
queryAlias=toID(BattleAliases[query]);
var aliasPassType=queryAlias==='hiddenpower'?'exact':'normal';
searchPasses.unshift([aliasPassType,DexSearch.getClosest(queryAlias),queryAlias]);
}
this.exactMatch=true;
}



if(!this.exactMatch&&BattleSearchIndex[i][0].substr(0,query.length)!==query){

var matchLength=query.length-1;
if(!i)i++;
while(matchLength&&
BattleSearchIndex[i][0].substr(0,matchLength)!==query.substr(0,matchLength)&&
BattleSearchIndex[i-1][0].substr(0,matchLength)!==query.substr(0,matchLength)){
matchLength--;
}
var matchQuery=query.substr(0,matchLength);
while(i>=1&&BattleSearchIndex[i-1][0].substr(0,matchLength)===matchQuery){i--;}
searchPasses.push(['fuzzy',i,'']);
}











var bufs=[[],[],[],[],[],[],[],[],[],[]];
var topbufIndex=-1;

var count=0;
var nearMatch=false;


var instafilter=null;
var instafilterSort=[0,1,2,5,4,3,6,7,8];
var illegal=(_this$typedSearch6=this.typedSearch)==null?void 0:_this$typedSearch6.illegalReasons;


for(i=0;i<BattleSearchIndex.length;i++){
if(!passType){
var searchPass=searchPasses.shift();
if(!searchPass)break;
passType=searchPass[0];
i=searchPass[1];
query=searchPass[2];
}

var entry=BattleSearchIndex[i];
var _id=entry[0];
var type=entry[1];

if(!_id)break;

if(passType==='fuzzy'){

if(count>=2){
passType='';
continue;
}
nearMatch=true;
}else if(passType==='exact'){

if(count>=1){
passType='';
continue;
}
}else if(_id.substr(0,query.length)!==query){

passType='';
continue;
}

if(entry.length>2){

if(passType!=='alias')continue;
}else{

if(passType==='alias')continue;
}

var typeIndex=DexSearch.typeTable[type];

if(query.length===1&&typeIndex!==(searchType?searchTypeIndex:1))continue;


if(searchType==='pokemon'&&(typeIndex===5||typeIndex>7))continue;
if(searchType==='pokemon'&&typeIndex===3&&this.dex.gen<8)continue;

if(searchType==='move'&&(typeIndex!==8&&typeIndex>4||typeIndex===3))continue;

if(searchType==='move'&&illegal&&typeIndex===1)continue;

if((searchType==='ability'||searchType==='item')&&typeIndex!==searchTypeIndex)continue;

if(qFilterType==='type'&&typeIndex!==2)continue;

if((_id==='megax'||_id==='megay')&&'mega'.startsWith(query))continue;

var matchStart=0;
var matchEnd=0;
if(passType==='alias'){


matchStart=entry[3];
var originalIndex=entry[2];
if(matchStart){
matchEnd=matchStart+query.length;
matchStart+=(BattleSearchIndexOffset[originalIndex][matchStart]||'0').charCodeAt(0)-48;
matchEnd+=(BattleSearchIndexOffset[originalIndex][matchEnd-1]||'0').charCodeAt(0)-48;
}
_id=BattleSearchIndex[originalIndex][0];
}else{
matchEnd=query.length;
if(matchEnd)matchEnd+=(BattleSearchIndexOffset[i][matchEnd-1]||'0').charCodeAt(0)-48;
}


if(queryAlias===_id&&query!==_id)continue;

if(searchType&&searchTypeIndex!==typeIndex){

if(!instafilter||instafilterSort[typeIndex]<instafilterSort[instafilter[2]]){
instafilter=[type,_id,typeIndex];
}
}


if(topbufIndex<0&&searchTypeIndex<2&&passType==='alias'&&!bufs[1].length&&bufs[2].length){
topbufIndex=2;
}


var table=BattleTeambuilderTable[window.room.curTeam.mod];
if(
typeIndex===1&&(!BattlePokedex[_id]||BattlePokedex[_id].exists===false)&&(
!table||!table.overrideDexInfo||_id in table.overrideDexInfo===false))
continue;else
if(
typeIndex===5&&(!BattleItems[_id]||BattleItems[_id].exists===false)&&(
!table||!table.overrideItemDesc||_id in table.overrideItemDesc===false))
continue;else
if(
typeIndex===4&&(!BattleMovedex[_id]||BattleMovedex[_id].exists===false)&&(
!table||!table.overrideMoveInfo||_id in table.overrideMoveInfo===false))
continue;else
if(
typeIndex===6&&(!BattleAbilities[_id]||BattleAbilities[_id].exists===false)&&(
!table||!table.overrideAbilityDesc||_id in table.overrideAbilityDesc===false))
continue;else
if(
typeIndex===2&&_id.replace(_id.charAt(0),_id.charAt(0).toUpperCase())in window.BattleTypeChart===false&&(
!table||_id.replace(_id.charAt(0),_id.charAt(0).toUpperCase())in table.overrideTypeChart===false))
continue;

if(illegal&&typeIndex===searchTypeIndex){





if(!bufs[typeIndex].length&&!bufs[0].length){
bufs[0]=[['header',DexSearch.typeName[type]]];
}
if(!(_id in illegal))typeIndex=0;
}else{
if(!bufs[typeIndex].length){
bufs[typeIndex]=[['header',DexSearch.typeName[type]]];
}
}


var curBufLength=passType==='alias'&&bufs[typeIndex].length;
if(curBufLength&&bufs[typeIndex][curBufLength-1][1]===_id)continue;

bufs[typeIndex].push([type,_id,matchStart,matchEnd]);
count++;
}

var topbuf=[];
if(nearMatch){
topbuf=[['html',"<em>No exact match found. The closest matches alphabetically are:</em>"]];
}
if(topbufIndex>=0){
topbuf=topbuf.concat(bufs[topbufIndex]);
bufs[topbufIndex]=[];
}
if(searchTypeIndex>=0){
topbuf=topbuf.concat(bufs[0]);
topbuf=topbuf.concat(bufs[searchTypeIndex]);
bufs[searchTypeIndex]=[];
bufs[0]=[];
}

if(instafilter&&count<20){

bufs.push(this.instafilter(searchType,instafilter[0],instafilter[1]));
}

this.results=Array.prototype.concat.apply(topbuf,bufs);
return this.results;
};_proto.
instafilter=function instafilter(searchType,fType,fId){var _this$typedSearch7;
var buf=[];
var illegalBuf=[];
var illegal=(_this$typedSearch7=this.typedSearch)==null?void 0:_this$typedSearch7.illegalReasons;

var pokedex=BattlePokedex;
var moveDex=BattleMovedex;
if(window.room.curTeam.mod){
pokedex={};
moveDex={};
var table=BattleTeambuilderTable[window.room.curTeam.mod];
for(var _id2 in table.overrideDexInfo){
pokedex[_id2]={
types:table.overrideDexInfo[_id2].types,
abilities:table.overrideDexInfo[_id2].abilities};

}
for(var _id3 in table.overrideMoveInfo){
moveDex[_id3]={
type:table.overrideMoveInfo.type,
category:table.overrideMoveInfo.category};

}
pokedex=Object.assign({},pokedex,BattlePokedex);
moveDex=Object.assign({},moveDex,BattleMovedex);
}
if(searchType==='pokemon'){
switch(fType){
case'type':
var type=fId.charAt(0).toUpperCase()+fId.slice(1);
buf.push(['header',type+"-type Pok&eacute;mon"]);
for(var _id4 in pokedex){
if(!pokedex[_id4].types)continue;
if(this.dex.getSpecies(_id4).types.includes(type)){
(illegal&&_id4 in illegal?illegalBuf:buf).push(['pokemon',_id4]);
}
}
break;
case'ability':
var ability=this.dex.getAbility(fId).name;
buf.push(['header',ability+" Pok&eacute;mon"]);
for(var _id5 in pokedex){
if(!pokedex[_id5].abilities)continue;
if(Dex.hasAbility(this.dex.getSpecies(_id5),ability)){
(illegal&&_id5 in illegal?illegalBuf:buf).push(['pokemon',_id5]);
}
}
break;}

}else if(searchType==='move'){
switch(fType){
case'type':
var _type=fId.charAt(0).toUpperCase()+fId.slice(1);
buf.push(['header',_type+"-type moves"]);
for(var _id6 in moveDex){
if(moveDex[_id6].type===_type){
(illegal&&_id6 in illegal?illegalBuf:buf).push(['move',_id6]);
}
}
break;
case'category':
var category=fId.charAt(0).toUpperCase()+fId.slice(1);
buf.push(['header',category+" moves"]);
for(var _id7 in moveDex){
if(moveDex[_id7].category===category){
(illegal&&_id7 in illegal?illegalBuf:buf).push(['move',_id7]);
}
}
break;}

}
return[].concat(buf,illegalBuf);
};DexSearch.

getClosest=function getClosest(query){

var left=0;
var right=BattleSearchIndex.length-1;
while(right>left){
var mid=Math.floor((right-left)/2+left);
if(BattleSearchIndex[mid][0]===query&&(mid===0||BattleSearchIndex[mid-1][0]!==query)){

return mid;
}else if(BattleSearchIndex[mid][0]<query){
left=mid+1;
}else{
right=mid-1;
}
}
if(left>=BattleSearchIndex.length-1)left=BattleSearchIndex.length-1;else
if(BattleSearchIndex[left+1][0]&&BattleSearchIndex[left][0]<query)left++;
if(left&&BattleSearchIndex[left-1][0]===query)left--;
return left;
};return DexSearch;}();DexSearch.typeTable={pokemon:1,type:2,tier:3,move:4,item:5,ability:6,egggroup:7,category:8,article:9};DexSearch.typeName={pokemon:'Pok&eacute;mon',type:'Type',tier:'Tiers',move:'Moves',item:'Items',ability:'Abilities',egggroup:'Egg group',category:'Category',article:'Article'};var


BattleTypedSearch=function(){














































function BattleTypedSearch(searchType){var format=arguments.length>1&&arguments[1]!==undefined?arguments[1]:'';var speciesOrSet=arguments.length>2&&arguments[2]!==undefined?arguments[2]:'';this.dex=Dex;this.format='';this.modFormat='';this.species='';this.set=null;this.mod='';this.formatType=null;this.baseResults=null;this.baseIllegalResults=null;this.illegalReasons=null;this.results=null;this.sortRow=null;
this.searchType=searchType;
this.baseResults=null;
this.baseIllegalResults=null;
this.modFormat=format;
var gen=8;
var ClientMods=window.ModConfig;
if(format.slice(0,3)==='gen'){
gen=Number(format.charAt(3))||6;
var mod='';
var overrideFormat='';
var modFormatType='';
for(var modid in ClientMods){
for(var formatid in ClientMods[modid].formats){
if(formatid===format){
mod=modid;
var formatTable=ClientMods[modid].formats[formatid];
if(mod&&formatTable.teambuilderFormat)overrideFormat=toID(formatTable.teambuilderFormat);
if(mod&&formatTable.formatType)modFormatType=toID(formatTable.formatType);
break;
}
}
}
if(mod){
this.dex=Dex.mod(mod);
this.dex.gen=gen;
this.mod=mod;
}else{
this.dex=Dex.forGen(gen);
}
if(overrideFormat)format=overrideFormat;else
format=format.slice(4)||'customgame';
if(modFormatType)this.formatType=modFormatType;
}else if(!format){
this.dex=Dex;
}
if(format.startsWith('dlc1')){
if(format.includes('doubles')){
this.formatType='dlc1doubles';
}else{
this.formatType='dlc1';
}
format=format.slice(4);
}
if(format==='vgc2020')this.formatType='dlc1doubles';
if(format.includes('doubles')&&this.dex.gen>4&&!this.formatType)this.formatType='doubles';
if(format.includes('letsgo'))this.formatType='letsgo';
if(format.includes('nationaldex')){
format=format.slice(11);
this.formatType='natdex';
if(!format)format='ou';
}
if(this.formatType==='letsgo')format=format.slice(6);
if(format.includes('metronome')){
this.formatType='metronome';
}
if(format.endsWith('nfe')){
format=format.slice(3);
this.formatType='nfe';
if(!format)format='ou';
}
this.format=format;

this.species='';
this.set=null;
if(typeof speciesOrSet==='string'){
if(speciesOrSet)this.species=speciesOrSet;
}else{
this.set=speciesOrSet;
this.species=toID(this.set.species);
}
if(!searchType||!this.set)return;
}var _proto2=BattleTypedSearch.prototype;_proto2.
getResults=function getResults(filters,sortCol){var _this=this;
if(sortCol==='type'){
return[this.sortRow].concat(BattleTypeSearch.prototype.getDefaultResults.call(this));
}else if(sortCol==='category'){
return[this.sortRow].concat(BattleCategorySearch.prototype.getDefaultResults.call(this));
}else if(sortCol==='ability'){
return[this.sortRow].concat(BattleAbilitySearch.prototype.getDefaultResults.call(this));
}
if(!this.baseResults){
this.baseResults=this.getBaseResults();
}

if(!this.baseIllegalResults){
var legalityFilter={};for(var _i2=0,_this$baseResults=
this.baseResults;_i2<_this$baseResults.length;_i2++){var _ref=_this$baseResults[_i2];var resultType=_ref[0];var value=_ref[1];
if(resultType===this.searchType)legalityFilter[value]=1;
}
this.baseIllegalResults=[];
this.illegalReasons={};

for(var _id8 in this.getTable()){
if(!(_id8 in legalityFilter)){
this.baseIllegalResults.push([this.searchType,_id8]);
this.illegalReasons[_id8]='Illegal';
}
}
}

var results;
var illegalResults;

if(filters){
results=[];
illegalResults=[];for(var _i3=0,_this$baseResults2=
this.baseResults;_i3<_this$baseResults2.length;_i3++){var result=_this$baseResults2[_i3];
if(this.filter(result,filters)){
if(results.length&&result[0]==='header'&&results[results.length-1][0]==='header'){
results[results.length-1]=result;
}else{
results.push(result);
}
}
}
if(results.length&&results[results.length-1][0]==='header'){
results.pop();
}for(var _i4=0,_this$baseIllegalResu=
this.baseIllegalResults;_i4<_this$baseIllegalResu.length;_i4++){var _result=_this$baseIllegalResu[_i4];
if(this.filter(_result,filters)){
illegalResults.push(_result);
}
}
}else{
results=[].concat(this.baseResults);
illegalResults=null;
}

if(sortCol){
results=results.filter(function(_ref2){var rowType=_ref2[0];return rowType===_this.searchType;});
results=this.sort(results,sortCol);
if(illegalResults){
illegalResults=illegalResults.filter(function(_ref3){var rowType=_ref3[0];return rowType===_this.searchType;});
illegalResults=this.sort(illegalResults,sortCol);
}
}

if(this.sortRow){
results=[this.sortRow].concat(results);
}
if(illegalResults&&illegalResults.length){
results=[].concat(results,[['header',"Illegal results"]],illegalResults);
}
return results;
};_proto2.
firstLearnsetid=function firstLearnsetid(speciesid){
var learnsets=BattleTeambuilderTable.learnsets;
if(speciesid in learnsets)return speciesid;
var species=this.dex.getSpecies(speciesid);
if(!species.exists)return'';
var baseLearnsetid=toID(species.baseSpecies);
if(typeof species.battleOnly==='string'&&species.battleOnly!==species.baseSpecies){
baseLearnsetid=toID(species.battleOnly);
}
if(baseLearnsetid in learnsets)return baseLearnsetid;
return'';
};_proto2.
nextLearnsetid=function nextLearnsetid(learnsetid,speciesid){
if(learnsetid==='lycanrocdusk'||speciesid==='rockruff'&&learnsetid==='rockruff'){
return'rockruffdusk';
}
var lsetSpecies=this.dex.getSpecies(learnsetid);
if(!lsetSpecies.exists)return'';

if(lsetSpecies.id==='gastrodoneast')return'gastrodon';
if(lsetSpecies.id==='pumpkaboosuper')return'pumpkaboo';

var next=lsetSpecies.battleOnly||lsetSpecies.changesFrom||lsetSpecies.prevo;
if(next)return toID(next);

return'';
};_proto2.
canLearn=function canLearn(speciesid,moveid){
if(this.dex.gen>=8&&this.dex.getMove(moveid).isNonstandard==='Past'&&this.formatType!=='natdex'){
return false;
}
var genChar=""+this.dex.gen;
if(
this.format.startsWith('vgc')||
this.format.startsWith('battlespot')||
this.format.startsWith('battlestadium'))
{
if(this.dex.gen===8){
genChar='g';
}else if(this.dex.gen===7){
genChar='q';
}else if(this.dex.gen===6){
genChar='p';
}
}
var learnsetid=this.firstLearnsetid(speciesid);
while(learnsetid){
var learnset=BattleTeambuilderTable.learnsets[learnsetid];
if(this.mod){
var overrideLearnsets=BattleTeambuilderTable[this.mod].overrideLearnsets;
if(overrideLearnsets[learnsetid]&&overrideLearnsets[learnsetid][moveid])learnset=overrideLearnsets[learnsetid];
}
if(learnset&&moveid in learnset&&learnset[moveid].includes(genChar)){
return true;
}
learnsetid=this.nextLearnsetid(learnsetid,speciesid);
}
return false;
};_proto2.
getTier=function getTier(pokemon){
if(this.formatType==='metronome'||this.formatType==='natdex'){
return pokemon.num>=0?String(pokemon.num):pokemon.tier;
}
var modFormatTable=this.mod?window.ModConfig[this.mod].formats[this.modFormat]:{};
var table=window.BattleTeambuilderTable;
if(this.mod)table=modFormatTable.gameType!=='doubles'?BattleTeambuilderTable[this.mod]:BattleTeambuilderTable[this.mod].doubles;
var tableKey=this.formatType==='doubles'?"gen"+this.dex.gen+"doubles":
this.formatType==='letsgo'?'letsgo':
this.formatType==='nfe'?"gen"+this.dex.gen+"nfe":
this.formatType==='dlc1'?'gen8dlc1':
this.formatType==='dlc1doubles'?'gen8dlc1doubles':"gen"+
this.dex.gen;
if(table&&table[tableKey]){
table=table[tableKey];
}
if(!table)return pokemon.tier;
var id=pokemon.id;
if(id in table.overrideTier){
return table.overrideTier[id];
}
if(id.slice(-5)==='totem'&&id.slice(0,-5)in table.overrideTier){
return table.overrideTier[id.slice(0,-5)];
}
id=toID(pokemon.baseSpecies);
if(id in table.overrideTier){
return table.overrideTier[id];
}
return pokemon.tier;
};return BattleTypedSearch;}();var







BattlePokemonSearch=function(_BattleTypedSearch){_inheritsLoose(BattlePokemonSearch,_BattleTypedSearch);function BattlePokemonSearch(){var _this2;for(var _len=arguments.length,args=new Array(_len),_key=0;_key<_len;_key++){args[_key]=arguments[_key];}_this2=_BattleTypedSearch.call.apply(_BattleTypedSearch,[this].concat(args))||this;_this2.
sortRow=['sortpokemon',''];return _this2;}var _proto3=BattlePokemonSearch.prototype;_proto3.
getTable=function getTable(){
if(!this.mod)return BattlePokedex;else
return Object.assign({},BattleTeambuilderTable[this.mod].overrideDexInfo,BattlePokedex);
};_proto3.
getDefaultResults=function getDefaultResults(){
var results=[];
for(var _id9 in BattlePokedex){
switch(_id9){
case'bulbasaur':
results.push(['header',"Generation 1"]);
break;
case'chikorita':
results.push(['header',"Generation 2"]);
break;
case'treecko':
results.push(['header',"Generation 3"]);
break;
case'turtwig':
results.push(['header',"Generation 4"]);
break;
case'victini':
results.push(['header',"Generation 5"]);
break;
case'chespin':
results.push(['header',"Generation 6"]);
break;
case'rowlet':
results.push(['header',"Generation 7"]);
break;
case'grookey':
results.push(['header',"Generation 8"]);
break;
case'missingno':
results.push(['header',"Glitch"]);
break;
case'tomohawk':
results.push(['header',"CAP"]);
break;
case'pikachucosplay':
continue;}

results.push(['pokemon',_id9]);
}
return results;
};_proto3.
getBaseResults=function getBaseResults(){var _this$formatType,_this3=this;
var format=this.format;
if(!format)return this.getDefaultResults();
var requirePentagon=format==='battlespotsingles'||format==='battledoubles'||format.startsWith('vgc');
var isDoublesOrBS=this.formatType==='doubles';
var dex=this.dex;
var modFormatTable=this.mod?window.ModConfig[this.mod].formats[this.modFormat]:{};
var table=BattleTeambuilderTable;
if(this.mod){
table=modFormatTable.gameType!=='doubles'?BattleTeambuilderTable[this.mod]:BattleTeambuilderTable[this.mod].doubles;
}else if(format.endsWith('cap')||format.endsWith('caplc')){

if(dex.gen<8){
table=table['gen'+dex.gen];
}
}else if(dex.gen===7&&requirePentagon){
table=table['gen'+dex.gen+'vgc'];
isDoublesOrBS=true;
}else if(table['gen'+dex.gen+'doubles']&&dex.gen>4&&this.formatType!=='letsgo'&&this.formatType!=='dlc1doubles'&&(

format.includes('doubles')||format.includes('vgc')||format.includes('triples')||
format.endsWith('lc')||format.endsWith('lcuu')))
{
table=table['gen'+dex.gen+'doubles'];
isDoublesOrBS=true;
}else if(dex.gen<8&&!this.formatType){
table=table['gen'+dex.gen];
}else if(this.formatType==='letsgo'){
table=table['letsgo'];
}else if(this.formatType==='natdex'){
table=table['natdex'];
}else if(this.formatType==='metronome'){
table=table['metronome'];
}else if(this.formatType==='nfe'){
table=table['gen'+dex.gen+'nfe'];
}else if((_this$formatType=this.formatType)!=null&&_this$formatType.startsWith('dlc1')){
if(this.formatType.includes('doubles')){
table=table['gen8dlc1doubles'];
}else{
table=table['gen8dlc1'];
}
}
if(!table.tierSet){
table.tierSet=table.tiers.map(function(r){
if(typeof r==='string')return['pokemon',r];
return[r[0],r[1]];
});
table.tiers=null;
}
var tierSet=table.tierSet;
var slices=table.formatSlices;
if(format==='ubers'||format==='uber')tierSet=tierSet.slice(slices.Uber);else
if(format==='vgc2017')tierSet=tierSet.slice(slices.Regular);else
if(format==='vgc2018')tierSet=tierSet.slice(slices.Regular);else
if(format.startsWith('vgc2019'))tierSet=tierSet.slice(slices["Restricted Legendary"]);else
if(format==='battlespotsingles')tierSet=tierSet.slice(slices.Regular);else
if(format==='battlespotdoubles')tierSet=tierSet.slice(slices.Regular);else
if(format==='ou')tierSet=tierSet.slice(slices.OU);else
if(format==='uu')tierSet=tierSet.slice(slices.UU);else
if(format==='ru')tierSet=tierSet.slice(slices.RU||slices.UU);else
if(format==='nu')tierSet=tierSet.slice(slices.NU||slices.UU);else
if(format==='pu')tierSet=tierSet.slice(slices.PU||slices.NU);else
if(format==='zu')tierSet=tierSet.slice(slices.ZU||slices.PU||slices.NU);else
if(format==='lc'||format==='lcuu'||format.startsWith('lc')||format!=='caplc'&&format.endsWith('lc'))tierSet=tierSet.slice(slices.LC);else
if(format==='cap')tierSet=tierSet.slice(0,slices.Uber).concat(tierSet.slice(slices.OU));else
if(format==='caplc')tierSet=tierSet.slice(slices['CAP LC'],slices.Uber).concat(tierSet.slice(slices.LC));else
if(format==='anythinggoes'||format.endsWith('ag'))tierSet=tierSet.slice(slices.AG);else
if(format==='balancedhackmons'||format.endsWith('bh'))tierSet=tierSet.slice(slices.AG);else
if(format==='doublesubers')tierSet=tierSet.slice(slices.DUber);else
if(format==='doublesou'&&dex.gen>4)tierSet=tierSet.slice(slices.DOU);else
if(format==='doublesuu')tierSet=tierSet.slice(slices.DUU);else
if(format==='doublesnu')tierSet=tierSet.slice(slices.DNU||slices.DUU);else
if(this.formatType==='letsgo')tierSet=tierSet.slice(slices.Uber);else

if(!isDoublesOrBS){
tierSet=[].concat(
tierSet.slice(slices.OU,slices.UU),
tierSet.slice(slices.AG,slices.Uber),
tierSet.slice(slices.Uber,slices.OU),
tierSet.slice(slices.UU));

}else{
tierSet=[].concat(
tierSet.slice(slices.DOU,slices.DUU),
tierSet.slice(slices.DUber,slices.DOU),
tierSet.slice(slices.DUU));

}

if(format==='zu'&&dex.gen>=7){
tierSet=tierSet.filter(function(_ref4){var type=_ref4[0],id=_ref4[1];
if(id in table.zuBans)return false;
return true;
});
}
if(format==='vgc2016'){
tierSet=tierSet.filter(function(_ref5){var type=_ref5[0],id=_ref5[1];
var banned=[
'deoxys','deoxysattack','deoxysdefense','deoxysspeed','mew','celebi','shaymin','shayminsky','darkrai','victini','keldeo','keldeoresolute','meloetta','arceus','genesect','jirachi','manaphy','phione','hoopa','hoopaunbound','diancie','dianciemega'];

return!(banned.includes(id)||id.startsWith('arceus'));
});
}

if(this.mod&&!table.customTierSet){
table.customTierSet=table.customTiers.map(function(r){
if(typeof r==='string')return['pokemon',r];
return[r[0],r[1]];
});
table.customTiers=null;
}
var customTierSet=table.customTierSet;
if(customTierSet){
tierSet=customTierSet.concat(tierSet);
if(modFormatTable.bans.length>0&&!modFormatTable.bans.includes("All Pokemon")){
tierSet=tierSet.filter(function(_ref6){var type=_ref6[0],id=_ref6[1];
var banned=modFormatTable.bans;
return!banned.includes(id);
});
}else if(modFormatTable.unbans.length>0&&modFormatTable.bans.includes("All Pokemon")){
tierSet=tierSet.filter(function(_ref7){var type=_ref7[0],id=_ref7[1];
var unbanned=modFormatTable.unbans;
return unbanned.includes(id)||type==='header';
});
}
var headerCount=0;
var lastHeader='';
var emptyHeaders=[];
for(var i in tierSet){
headerCount=tierSet[i][0]==='header'?headerCount+1:0;
if(headerCount>1)emptyHeaders.push(lastHeader);
if(headerCount>0)lastHeader=tierSet[i][1];
}
if(headerCount===1)emptyHeaders.push(lastHeader);
tierSet=tierSet.filter(function(_ref8){var type=_ref8[0],id=_ref8[1];
return type!=='header'||!emptyHeaders.includes(id);
});
}


if(!/^(battlestadium|vgc|doublesubers)/g.test(format)){
tierSet=tierSet.filter(function(_ref9){var type=_ref9[0],id=_ref9[1];
if(type==='pokemon'&&!_this3.mod){
return!id.endsWith('gmax');
}
return true;
});
}

return tierSet;
};_proto3.
filter=function filter(row,filters){
if(!filters)return true;
if(row[0]!=='pokemon')return true;
var species=this.dex.getSpecies(row[1]);for(var _i5=0;_i5<
filters.length;_i5++){var _ref10=filters[_i5];var filterType=_ref10[0];var value=_ref10[1];
switch(filterType){
case'type':
if(species.types[0]!==value&&species.types[1]!==value)return false;
break;
case'egggroup':
if(species.eggGroups[0]!==value&&species.eggGroups[1]!==value)return false;
break;
case'tier':
if(this.getTier(species)!==value)return false;
break;
case'ability':
if(!Dex.hasAbility(species,value))return false;
break;
case'move':
if(!this.canLearn(species.id,value))return false;}

}
return true;
};_proto3.
sort=function sort(results,sortCol){var _this4=this;
var table=!this.mod?'':BattleTeambuilderTable[this.mod].overrideDexInfo;
if(['hp','atk','def','spa','spd','spe'].includes(sortCol)){
return results.sort(function(_ref11,_ref12){var rowType1=_ref11[0],id1=_ref11[1];var rowType2=_ref12[0],id2=_ref12[1];
var pokedex1=BattlePokedex;
var pokedex2=BattlePokedex;
if(_this4.mod){
if(table[id1]&&table[id1].baseStats)pokedex1=table;
if(table[id2]&&table[id2].baseStats)pokedex2=table;
}
var stat1=pokedex1[id1].baseStats[sortCol];
var stat2=pokedex2[id2].baseStats[sortCol];
return stat2-stat1;
});
}else if(sortCol==='bst'){
return results.sort(function(_ref13,_ref14){var rowType1=_ref13[0],id1=_ref13[1];var rowType2=_ref14[0],id2=_ref14[1];
var pokedex1=BattlePokedex;
var pokedex2=BattlePokedex;
if(_this4.mod){
if(table[id1]&&table[id1].baseStats)pokedex1=table;
if(table[id2]&&table[id2].baseStats)pokedex2=table;
}
var base1=pokedex1[id1].baseStats;
var base2=pokedex2[id2].baseStats;
var bst1=base1.hp+base1.atk+base1.def+base1.spa+base1.spd+base1.spe;
var bst2=base2.hp+base2.atk+base2.def+base2.spa+base2.spd+base2.spe;
return bst2-bst1;
});
}else if(sortCol==='name'){
return results.sort(function(_ref15,_ref16){var rowType1=_ref15[0],id1=_ref15[1];var rowType2=_ref16[0],id2=_ref16[1];
var name1=id1;
var name2=id2;
return name1<name2?-1:name1>name2?1:0;
});
}
throw new Error("invalid sortcol");
};return BattlePokemonSearch;}(BattleTypedSearch);var


BattleAbilitySearch=function(_BattleTypedSearch2){_inheritsLoose(BattleAbilitySearch,_BattleTypedSearch2);function BattleAbilitySearch(){return _BattleTypedSearch2.apply(this,arguments)||this;}var _proto4=BattleAbilitySearch.prototype;_proto4.
getTable=function getTable(){
if(!this.mod)return BattleAbilities;else
return Object.assign({},BattleTeambuilderTable[this.mod].fullAbilityName,BattleAbilities);
};_proto4.
getDefaultResults=function getDefaultResults(){
var results=[];
for(var _id10 in BattleAbilities){
results.push(['ability',_id10]);
}
return results;
};_proto4.
getBaseResults=function getBaseResults(){
if(!this.species)return this.getDefaultResults();
var format=this.format;
var isHackmons=format.includes('hackmons')||format.endsWith('bh');
var isAAA=format==='almostanyability'||format.includes('aaa');
var dex=this.dex;
var species=dex.getSpecies(this.species);
var abilitySet=[['header',"Abilities"]];

if(species.isMega){
abilitySet.unshift(['html',"Will be <strong>"+species.abilities['0']+"</strong> after Mega Evolving."]);
species=dex.getSpecies(species.baseSpecies);
}
abilitySet.push(['ability',toID(species.abilities['0'])]);
if(species.abilities['1']){
abilitySet.push(['ability',toID(species.abilities['1'])]);
}
if(species.abilities['H']){
abilitySet.push(['header',"Hidden Ability"]);
abilitySet.push(['ability',toID(species.abilities['H'])]);
}
if(species.abilities['S']){
abilitySet.push(['header',"Special Event Ability"]);
abilitySet.push(['ability',toID(species.abilities['S'])]);
}
if(isAAA||format==='metronomebattle'||isHackmons){
var abilities=[];
for(var i in this.getTable()){
var ability=dex.getAbility(i);
if(ability.isNonstandard)continue;
if(ability.gen>dex.gen)continue;
abilities.push(ability.id);
}

var goodAbilities=[['header',"Abilities"]];
var poorAbilities=[['header',"Situational Abilities"]];
var badAbilities=[['header',"Unviable Abilities"]];for(var _i6=0,_abilities$sort$map=
abilities.sort().map(function(abil){return dex.getAbility(abil);});_i6<_abilities$sort$map.length;_i6++){var _ability=_abilities$sort$map[_i6];
var rating=_ability.rating;
if(_ability.id==='normalize')rating=3;
if(rating>=3){
goodAbilities.push(['ability',_ability.id]);
}else if(rating>=2){
poorAbilities.push(['ability',_ability.id]);
}else{
badAbilities.push(['ability',_ability.id]);
}
}
abilitySet=[].concat(goodAbilities,poorAbilities,badAbilities);
if(species.isMega){
if(isAAA){
abilitySet.unshift(['html',"Will be <strong>"+species.abilities['0']+"</strong> after Mega Evolving."]);
}

}
}
return abilitySet;
};_proto4.
filter=function filter(row,filters){
if(!filters)return true;
if(row[0]!=='ability')return true;
var ability=this.dex.getAbility(row[1]);for(var _i7=0;_i7<
filters.length;_i7++){var _ref17=filters[_i7];var filterType=_ref17[0];var value=_ref17[1];
switch(filterType){
case'pokemon':
if(!Dex.hasAbility(this.dex.getSpecies(value),ability.name))return false;
break;}

}
return true;
};_proto4.
sort=function sort(results,sortCol){
throw new Error("invalid sortcol");
};return BattleAbilitySearch;}(BattleTypedSearch);var


BattleItemSearch=function(_BattleTypedSearch3){_inheritsLoose(BattleItemSearch,_BattleTypedSearch3);function BattleItemSearch(){return _BattleTypedSearch3.apply(this,arguments)||this;}var _proto5=BattleItemSearch.prototype;_proto5.
getTable=function getTable(){
if(!this.mod)return BattleItems;else
return Object.assign({},BattleTeambuilderTable[this.mod].fullItemName,BattleItems);
};_proto5.
getDefaultResults=function getDefaultResults(){
var table=BattleTeambuilderTable;
if(this.mod){
table=table[this.mod];
}else if(this.dex.gen<8){
table=table['gen'+this.dex.gen];
}else if(this.formatType==='natdex'){
table=table['natdex'];
}else if(this.formatType==='metronome'){
table=table['metronome'];
}
if(!table.itemSet){
table.itemSet=table.items.map(function(r){
if(typeof r==='string'){
return['item',r];
}
return[r[0],r[1]];
});
table.items=null;
}
return table.itemSet;
};_proto5.
getBaseResults=function getBaseResults(){
if(!this.species)return this.getDefaultResults();
var speciesName=this.dex.getSpecies(this.species).name;
var results=this.getDefaultResults();
var speciesSpecific=[];for(var _i8=0;_i8<
results.length;_i8++){var _this$dex$getItem$ite;var row=results[_i8];
if(row[0]!=='item')continue;
if((_this$dex$getItem$ite=this.dex.getItem(row[1]).itemUser)!=null&&_this$dex$getItem$ite.includes(speciesName)){
speciesSpecific.push(row);
}
}
if(speciesSpecific.length){
return[
['header',"Specific to "+speciesName]].concat(
speciesSpecific,
results);

}
return results;
};_proto5.
filter=function filter(row,filters){
if(!filters)return true;
if(row[0]!=='ability')return true;
var ability=this.dex.getAbility(row[1]);for(var _i9=0;_i9<
filters.length;_i9++){var _ref18=filters[_i9];var filterType=_ref18[0];var value=_ref18[1];
switch(filterType){
case'pokemon':
if(!Dex.hasAbility(this.dex.getSpecies(value),ability.name))return false;
break;}

}
return true;
};_proto5.
sort=function sort(results,sortCol){
throw new Error("invalid sortcol");
};return BattleItemSearch;}(BattleTypedSearch);var


BattleMoveSearch=function(_BattleTypedSearch4){_inheritsLoose(BattleMoveSearch,_BattleTypedSearch4);function BattleMoveSearch(){var _this5;for(var _len2=arguments.length,args=new Array(_len2),_key2=0;_key2<_len2;_key2++){args[_key2]=arguments[_key2];}_this5=_BattleTypedSearch4.call.apply(_BattleTypedSearch4,[this].concat(args))||this;_this5.
sortRow=['sortmove',''];return _this5;}var _proto6=BattleMoveSearch.prototype;_proto6.
getTable=function getTable(){
if(!this.mod)return BattleMovedex;else
return Object.assign({},BattleTeambuilderTable[this.mod].overrideMoveInfo,BattleMovedex);
};_proto6.
getDefaultResults=function getDefaultResults(){
var results=[];
results.push(['header',"Moves"]);
for(var _id11 in BattleMovedex){
switch(_id11){
case'paleowave':
results.push(['header',"CAP moves"]);
break;
case'magikarpsrevenge':
continue;}

results.push(['move',_id11]);
}
return results;
};_proto6.
moveIsNotUseless=function moveIsNotUseless(id,species,abilityid,itemid,moves){var _moveData$flags,_moveData$flags2;
var dex=this.dex;
if(dex.gen===1){

if([
'acidarmor','amnesia','barrier','bind','blizzard','clamp','confuseray','counter','firespin','hyperbeam','mirrormove','pinmissile','razorleaf','sing','slash','sludge','twineedle','wrap'].
includes(id)){
return true;
}


if([
'disable','firepunch','icepunch','leechseed','quickattack','roar','thunderpunch','toxic','triattack','whirlwind'].
includes(id)){
return false;
}

switch(id){
case'bubblebeam':return!moves.includes('surf')&&!moves.includes('blizzard');
case'doubleedge':return!moves.includes('bodyslam');
case'doublekick':return!moves.includes('submission');
case'megadrain':return!moves.includes('razorleaf')&&!moves.includes('surf');
case'megakick':return!moves.includes('hyperbeam');
case'reflect':return!moves.includes('barrier')&&!moves.includes('acidarmor');
case'submission':return!moves.includes('highjumpkick');}

}

if(this.formatType==='letsgo'){
if(id==='megadrain')return true;
}

if(this.formatType==='metronome'){
if(id==='metronome')return true;
}

if(itemid==='pidgeotite')abilityid='noguard';
if(itemid==='blastoisinite')abilityid='megalauncher';
if(itemid==='aerodactylite')abilityid='toughclaws';
if(itemid==='glalitite')abilityid='refrigerate';

switch(id){
case'fakeout':case'flamecharge':case'nuzzle':case'poweruppunch':
return abilityid!=='sheerforce';
case'solarbeam':case'solarblade':
return['desolateland','drought','chlorophyll'].includes(abilityid)||itemid==='powerherb';
case'dynamicpunch':case'grasswhistle':case'inferno':case'sing':case'zapcannon':
return abilityid==='noguard';
case'heatcrash':case'heavyslam':
return species.weightkg>=(species.evos?75:130);

case'aerialace':
return['technician','toughclaws'].includes(abilityid)&&!moves.includes('bravebird');
case'ancientpower':
return['serenegrace','technician'].includes(abilityid)||!moves.includes('powergem');
case'aurawheel':
return species.baseSpecies==='Morpeko';
case'bellydrum':
return moves.includes('aquajet')||moves.includes('extremespeed')||
['iceface','unburden'].includes(abilityid);
case'bulletseed':
return['skilllink','technician'].includes(abilityid);
case'counter':
return species.baseStats.hp>=65;
case'darkvoid':
return dex.gen<7;
case'drainingkiss':
return abilityid==='triage';
case'dualwingbeat':
return abilityid==='technician'||!moves.includes('drillpeck');
case'feint':
return abilityid==='refrigerate';
case'grassyglide':
return abilityid==='grassysurge';
case'gyroball':
return species.baseStats.spe<=60;
case'headbutt':
return abilityid==='serenegrace';
case'hiddenpowerelectric':
return dex.gen<4&&!moves.includes('thunderpunch')&&!moves.includes('thunderbolt');
case'hiddenpowerfighting':
return dex.gen<4&&!moves.includes('brickbreak')&&!moves.includes('aurasphere')&&!moves.includes('focusblast');
case'hiddenpowerfire':
return dex.gen<4&&!moves.includes('firepunch')&&!moves.includes('flamethrower');
case'hiddenpowergrass':
return!moves.includes('energyball')&&!moves.includes('grassknot')&&!moves.includes('gigadrain');
case'hiddenpowerice':
return!moves.includes('icebeam')&&dex.gen<4&&!moves.includes('icepunch')||dex.gen>5&&!moves.includes('aurorabeam');
case'hiddenpowerflying':
return dex.gen<4&&!moves.includes('drillpeck');
case'hiddenpowerbug':
return dex.gen<4&&!moves.includes('megahorn');
case'hiddenpowerpsychic':
return species.baseSpecies==='Unown';
case'hyperspacefury':
return species.id==='hoopaunbound';
case'hypnosis':
return dex.gen<4&&!moves.includes('sleeppowder')||dex.gen>6&&abilityid==='baddreams';
case'icywind':

return species.baseSpecies==='Keldeo'||this.formatType==='doubles';
case'infestation':
return moves.includes('stickyweb');
case'irontail':
return dex.gen>5&&!moves.includes('ironhead')&&!moves.includes('gunkshot')&&!moves.includes('poisonjab');
case'jumpkick':
return!moves.includes('highjumpkick');
case'leechlife':
return dex.gen>6;
case'mysticalfire':
return dex.gen>6&&!moves.includes('flamethrower');
case'naturepower':
return dex.gen===5;
case'nightslash':
return!moves.includes('crunch')&&!(moves.includes('knockoff')&&dex.gen>=6);
case'petaldance':
return abilityid==='owntempo';
case'phantomforce':
return!moves.includes('poltergeist')&&!moves.includes('shadowclaw')||this.formatType==='doubles';
case'poisonfang':
return species.types.includes('Poison')&&!moves.includes('gunkshot')&&!moves.includes('poisonjab');
case'relicsong':
return species.id==='meloetta';
case'refresh':
return!moves.includes('aromatherapy')&&!moves.includes('healbell');
case'risingvoltage':
return abilityid==='electricsurge';
case'rocktomb':
return abilityid==='technician';
case'selfdestruct':
return dex.gen<5&&!moves.includes('explosion');
case'shadowpunch':
return abilityid==='ironfist';
case'smackdown':
return species.types.includes('Ground');
case'smartstrike':
return species.types.includes('Steel')&&!moves.includes('ironhead');
case'soak':
return abilityid==='unaware';
case'steelwing':
return!moves.includes('ironhead');
case'stompingtantrum':
return!moves.includes('earthquake')&&!moves.includes('drillrun')||this.formatType==='doubles';
case'stunspore':
return!moves.includes('thunderwave');
case'technoblast':
return dex.gen>5&&itemid.endsWith('drive')||itemid==='dousedrive';
case'teleport':
return dex.gen>7;
case'terrainpulse':case'waterpulse':
return['megalauncher','technician'].includes(abilityid)&&!moves.includes('originpulse');
case'trickroom':
return species.baseStats.spe<=100;}


if(this.formatType==='doubles'&&BattleMoveSearch.GOOD_DOUBLES_MOVES.includes(id)){
return true;
}

if(this.mod&&id in BattleTeambuilderTable[this.mod].overrideMoveInfo)return true;
var moveData=BattleMovedex[id];
if(!moveData)return true;
if(moveData.category==='Status'){
return BattleMoveSearch.GOOD_STATUS_MOVES.includes(id);
}
if(moveData.basePower<75){
return BattleMoveSearch.GOOD_WEAK_MOVES.includes(id);
}
if(id==='skydrop')return true;

if((_moveData$flags=moveData.flags)!=null&&_moveData$flags.charge){
return itemid==='powerherb';
}
if((_moveData$flags2=moveData.flags)!=null&&_moveData$flags2.recharge){
return false;
}
return!BattleMoveSearch.BAD_STRONG_MOVES.includes(id);
};_proto6.












getBaseResults=function getBaseResults(){
if(!this.species)return this.getDefaultResults();
var dex=this.dex;
var species=dex.getSpecies(this.species);
var format=this.format;
var isHackmons=format.includes('hackmons')||format.endsWith('bh');
var isSTABmons=format.includes('stabmons')||format==='staaabmons';
var galarBornLegality=format.includes('battlestadium')||format.startsWith('vgc')&&this.dex.gen===8;

var abilityid=this.set?toID(this.set.ability):'';
var itemid=this.set?toID(this.set.item):'';

var learnsetid=this.firstLearnsetid(species.id);
var moves=[];
var sketchMoves=[];
var sketch=false;
var gen=''+dex.gen;
while(learnsetid){var _this$formatType2;
var learnset=BattleTeambuilderTable.learnsets[learnsetid];
if(this.mod){
learnset=JSON.parse(JSON.stringify(learnset));
var overrideLearnsets=BattleTeambuilderTable[this.mod].overrideLearnsets;
if(overrideLearnsets[learnsetid]){
for(var moveid in overrideLearnsets[learnsetid]){learnset[moveid]=overrideLearnsets[learnsetid][moveid];}
}
}
if(this.formatType==='letsgo')learnset=BattleTeambuilderTable['letsgo'].learnsets[learnsetid];
if((_this$formatType2=this.formatType)!=null&&_this$formatType2.startsWith('dlc1'))learnset=BattleTeambuilderTable['gen8dlc1'].learnsets[learnsetid];
if(learnset){
for(var _moveid in learnset){var _this$formatType3,_BattleTeambuilderTab;
var learnsetEntry=learnset[_moveid];



if(galarBornLegality&&!learnsetEntry.includes('g')){
continue;
}else if(!learnsetEntry.includes(gen)){
continue;
}
if(this.dex.gen>=8&&this.dex.getMove(_moveid)&&this.dex.getMove(_moveid).isNonstandard==='Past'&&this.formatType!=='natdex')continue;
if((_this$formatType3=this.formatType)!=null&&_this$formatType3.startsWith('dlc1')&&(_BattleTeambuilderTab=BattleTeambuilderTable['gen8dlc1'])!=null&&_BattleTeambuilderTab.nonstandardMoves.includes(_moveid))continue;
if(moves.includes(_moveid))continue;
moves.push(_moveid);
if(_moveid==='sketch')sketch=true;
if(_moveid==='hiddenpower'){
moves.push(
'hiddenpowerbug','hiddenpowerdark','hiddenpowerdragon','hiddenpowerelectric','hiddenpowerfighting','hiddenpowerfire','hiddenpowerflying','hiddenpowerghost','hiddenpowergrass','hiddenpowerground','hiddenpowerice','hiddenpowerpoison','hiddenpowerpsychic','hiddenpowerrock','hiddenpowersteel','hiddenpowerwater');

}
}
}
learnsetid=this.nextLearnsetid(learnsetid,species.id);
}
if(sketch||isHackmons){
if(isHackmons)moves=[];
for(var _id12 in BattleMovedex){
if(!format.startsWith('cap')&&(_id12==='paleowave'||_id12==='shadowstrike'))continue;
var move=dex.getMove(_id12);
if(move.gen>dex.gen)continue;
if(sketch){
if(move.isMax||move.isZ||move.isNonstandard)continue;
sketchMoves.push(move.id);
}else{
if(!(dex.gen<8||this.formatType==='natdex')&&move.isZ)continue;
if(typeof move.isMax==='string')continue;
if(move.isNonstandard==='Past'&&this.formatType!=='natdex'&&dex.gen===8)continue;
moves.push(move.id);
}
}
}
if(this.formatType==='metronome')moves=['metronome'];
if(isSTABmons){
for(var _id13 in BattleMovedex){
var types=[];
var baseSpecies=dex.getSpecies(species.changesFrom||species.name);
if(!species.battleOnly)types.push.apply(types,species.types);
var prevo=species.prevo;
while(prevo){
var prevoSpecies=dex.getSpecies(prevo);
types.push.apply(types,prevoSpecies.types);
prevo=prevoSpecies.prevo;
}
if(species.battleOnly)species=baseSpecies;
var excludedForme=function(s){return['Alola','Alola-Totem','Galar','Galar-Zen'].includes(s.forme);};
if(baseSpecies.otherFormes&&!['Wormadam','Urshifu'].includes(baseSpecies.baseSpecies)){
if(!excludedForme(species))types.push.apply(types,baseSpecies.types);for(var _i10=0,_baseSpecies$otherFor=
baseSpecies.otherFormes;_i10<_baseSpecies$otherFor.length;_i10++){var formeName=_baseSpecies$otherFor[_i10];
var forme=dex.getSpecies(formeName);
if(!forme.battleOnly&&!excludedForme(forme))types.push.apply(types,forme.types);
}
}
var _move=Dex.getMove(_id13);
if(!types.includes(_move.type))continue;
if(moves.includes(_move.id))continue;
if(_move.gen>dex.gen)continue;
if(_move.isZ||_move.isMax||_move.isNonstandard)continue;
moves.push(_id13);
}
}

moves.sort();
sketchMoves.sort();

var usableMoves=[];
var uselessMoves=[];for(var _i11=0,_moves=
moves;_i11<_moves.length;_i11++){var _id14=_moves[_i11];
var isUsable=this.moveIsNotUseless(_id14,species,abilityid,itemid,moves);
if(isUsable){
if(!usableMoves.length)usableMoves.push(['header',"Moves"]);
usableMoves.push(['move',_id14]);
}else{
if(!uselessMoves.length)uselessMoves.push(['header',"Usually useless moves"]);
uselessMoves.push(['move',_id14]);
}
}
if(sketchMoves.length){
usableMoves.push(['header',"Sketched moves"]);
uselessMoves.push(['header',"Useless sketched moves"]);
}for(var _i12=0;_i12<
sketchMoves.length;_i12++){var _id15=sketchMoves[_i12];
var _isUsable=this.moveIsNotUseless(_id15,species,abilityid,itemid,sketchMoves);
if(_isUsable){
usableMoves.push(['move',_id15]);
}else{
uselessMoves.push(['move',_id15]);
}
}
return[].concat(usableMoves,uselessMoves);
};_proto6.
filter=function filter(row,filters){
if(!filters)return true;
if(row[0]!=='move')return true;
var move=this.dex.getMove(row[1]);for(var _i13=0;_i13<
filters.length;_i13++){var _ref19=filters[_i13];var filterType=_ref19[0];var value=_ref19[1];
switch(filterType){
case'type':
if(move.type!==value)return false;
break;
case'category':
if(move.category!==value)return false;
break;
case'pokemon':
if(!this.canLearn(value,move.id))return false;
break;}

}
return true;
};_proto6.
sort=function sort(results,sortCol){var _this6=this;
switch(sortCol){
case'power':
var powerTable={
"return":102,frustration:102,spitup:300,trumpcard:200,naturalgift:80,grassknot:120,
lowkick:120,gyroball:150,electroball:150,flail:200,reversal:200,present:120,
wringout:120,crushgrip:120,heatcrash:120,heavyslam:120,fling:130,magnitude:150,
beatup:24,punishment:1020,psywave:1250,nightshade:1200,seismictoss:1200,
dragonrage:1140,sonicboom:1120,superfang:1350,endeavor:1399,sheercold:1501,
fissure:1500,horndrill:1500,guillotine:1500};

return results.sort(function(_ref20,_ref21){var rowType1=_ref20[0],id1=_ref20[1];var rowType2=_ref21[0],id2=_ref21[1];
var modPow1=_this6.mod?BattleTeambuilderTable[_this6.mod].overrideBP[id1]:null;
var modPow2=_this6.mod?BattleTeambuilderTable[_this6.mod].overrideBP[id2]:null;
var move1=BattleMovedex[id1];
var move2=BattleMovedex[id2];
var pow1=modPow1||move1.basePower||powerTable[id1]||(move1.category==='Status'?-1:1400);
var pow2=modPow2||move2.basePower||powerTable[id2]||(move2.category==='Status'?-1:1400);
return pow2-pow1;
});
case'accuracy':
return results.sort(function(_ref22,_ref23){var rowType1=_ref22[0],id1=_ref22[1];var rowType2=_ref23[0],id2=_ref23[1];
var modAcc1=_this6.mod?BattleTeambuilderTable[_this6.mod].overrideAcc[id1]:null;
var modAcc2=_this6.mod?BattleTeambuilderTable[_this6.mod].overrideAcc[id2]:null;
var accuracy1=modAcc1||BattleMovedex[id1].accuracy||0;
var accuracy2=modAcc2||BattleMovedex[id2].accuracy||0;
if(accuracy1===true)accuracy1=101;
if(accuracy2===true)accuracy2=101;
return accuracy2-accuracy1;
});
case'pp':
return results.sort(function(_ref24,_ref25){var rowType1=_ref24[0],id1=_ref24[1];var rowType2=_ref25[0],id2=_ref25[1];
var modPP1=_this6.mod?BattleTeambuilderTable[_this6.mod].overridePP[id1]:null;
var modPP2=_this6.mod?BattleTeambuilderTable[_this6.mod].overridePP[id2]:null;
var pp1=modPP1||BattleMovedex[id1].pp||0;
var pp2=modPP2||BattleMovedex[id2].pp||0;
return pp2-pp1;
});
case'name':
return results.sort(function(_ref26,_ref27){var rowType1=_ref26[0],id1=_ref26[1];var rowType2=_ref27[0],id2=_ref27[1];
var name1=id1;
var name2=id2;
return name1<name2?-1:name1>name2?1:0;
});}

throw new Error("invalid sortcol");
};return BattleMoveSearch;}(BattleTypedSearch);BattleMoveSearch.GOOD_STATUS_MOVES=['agility','aromatherapy','auroraveil','autotomize','banefulbunker','batonpass','bellydrum','bulkup','calmmind','clangoroussoul','coil','cottonguard','courtchange','curse','defog','destinybond','detect','disable','dragondance','drainingkiss','encore','extremeevoboost','geomancy','glare','haze','healbell','healingwish','healorder','heartswap','honeclaws','kingsshield','irondefense','leechseed','lightscreen','lovelykiss','lunardance','magiccoat','maxguard','memento','milkdrink','moonlight','morningsun','nastyplot','naturesmadness','noretreat','obstruct','painsplit','partingshot','perishsong','protect','quiverdance','recover','reflect','reflecttype','rest','roar','rockpolish','roost','shellsmash','shiftgear','slackoff','sleeppowder','sleeptalk','softboiled','spikes','spikyshield','spore','stealthrock','stickyweb','strengthsap','substitute','switcheroo','swordsdance','synthesis','tailglow','tailwind','taunt','thunderwave','toxic','toxicspikes','transform','trick','whirlwind','willowisp','wish','yawn'];BattleMoveSearch.GOOD_WEAK_MOVES=['accelerock','acrobatics','aquajet','avalanche','bonemerang','bouncybubble','bulletpunch','buzzybuzz','circlethrow','clearsmog','doubleironbash','dragondarts','dragontail','endeavor','facade','firefang','flipturn','freezedry','frustration','geargrind','grassknot','gyroball','hex','icefang','iceshard','iciclespear','knockoff','lowkick','machpunch','nightshade','nuzzle','pikapapow','psychocut','pursuit','quickattack','rapidspin','return','rockblast','scorchingsands','seismictoss','shadowclaw','shadowsneak','sizzlyslide','storedpower','stormthrow','suckerpunch','superfang','surgingstrikes','tailslap','tripleaxel','uturn','veeveevolley','voltswitch','watershuriken','weatherball'];BattleMoveSearch.BAD_STRONG_MOVES=['beakblast','belch','burnup','crushclaw','doomdesire','dragonrush','dreameater','eggbomb','firepledge','flyingpress','futuresight','grasspledge','hyperbeam','hyperfang','hyperspacehole','jawlock','landswrath','lastresort','megakick','megapunch','mistyexplosion','muddywater','nightdaze','pollenpuff','rockclimb','selfdestruct','shelltrap','skyuppercut','slam','strength','submission','synchronoise','takedown','thrash','uproar','waterpledge'];BattleMoveSearch.GOOD_DOUBLES_MOVES=['allyswitch','bulldoze','coaching','electroweb','faketears','fling','followme','healpulse','helpinghand','junglehealing','lifedew','muddywater','pollenpuff','psychup','ragepowder','safeguard','skillswap','snipeshot','wideguard'];var


BattleCategorySearch=function(_BattleTypedSearch5){_inheritsLoose(BattleCategorySearch,_BattleTypedSearch5);function BattleCategorySearch(){return _BattleTypedSearch5.apply(this,arguments)||this;}var _proto7=BattleCategorySearch.prototype;_proto7.
getTable=function getTable(){
return{physical:1,special:1,status:1};
};_proto7.
getDefaultResults=function getDefaultResults(){
return[
['category','physical'],
['category','special'],
['category','status']];

};_proto7.
getBaseResults=function getBaseResults(){
return this.getDefaultResults();
};_proto7.
filter=function filter(row,filters){
throw new Error("invalid filter");
};_proto7.
sort=function sort(results,sortCol){
throw new Error("invalid sortcol");
};return BattleCategorySearch;}(BattleTypedSearch);var


BattleTypeSearch=function(_BattleTypedSearch6){_inheritsLoose(BattleTypeSearch,_BattleTypedSearch6);function BattleTypeSearch(){return _BattleTypedSearch6.apply(this,arguments)||this;}var _proto8=BattleTypeSearch.prototype;_proto8.
getTable=function getTable(){
if(!this.mod)return window.BattleTypeChart;else
return Object.assign({},BattleTeambuilderTable[this.mod].overrideTypeChart,window.BattleTypeChart);
};_proto8.
getDefaultResults=function getDefaultResults(){
var results=[];
for(var _id16 in window.BattleTypeChart){
results.push(['type',_id16]);
}
return results;
};_proto8.
getBaseResults=function getBaseResults(){
return this.getDefaultResults();
};_proto8.
filter=function filter(row,filters){
throw new Error("invalid filter");
};_proto8.
sort=function sort(results,sortCol){
throw new Error("invalid sortcol");
};return BattleTypeSearch;}(BattleTypedSearch);
//# sourceMappingURL=battle-dex-search.js.map