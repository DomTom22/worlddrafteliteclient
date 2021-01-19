<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.498936893214039" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5180913946452395" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3695779617540029" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8247240824211517" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5535757541853576" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5205766986229519" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6148306827929613"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5685139343461694" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9370956286053602">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.27025308983899987">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7010154844022405">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.4388021854968136">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8292917122244077"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2971244938838338"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6880294273120282"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10310875174718936"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4892830657883356"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6851365306681207"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7314296258158337"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8639613136028346"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.08108156306042669"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6160401498672823"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7950213267245965"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9421733203346625"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5577864295333637"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.047491008330688755"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7722514007788024"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8404719972519576"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.18314221337102543"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8132250504072329"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.615990208221971"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
