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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.9555897887313491" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.8753196495246405" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.46981923885211163" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.0909472178227384" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.4825620746837871" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.2531067338037265" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.8049505899317222"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.20062610391843494" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9448909818476645">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3737710253759532">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.3710746693941327">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.1663202251115492">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.42126740501656235"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.964274015076297"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.40762972335620873"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9094012334499637"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.15200861100793062"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9613291287046251"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6863560077159541"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7597037087388205"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.2937815370887997"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8594226042295032"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6858793760836421"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.060545860282244846"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5081585808599891"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.7658005102467109"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6749322315833284"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6483072998027564"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.48491996019696204"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.5873487366058121"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9872763262858033"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
