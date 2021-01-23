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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9099710049429177" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.3874248869446737" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.37440786697868056" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.15867877956819787" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.28349509827424635" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.32275071115137255" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.044688113725521506"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.18776791263148862" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.40075032318179593">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.47727014713808136">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.11928749186401877">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.666264510814909">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7658759877263559"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5476301772022778"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5358153288436438"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7662849133802283"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.249397808148617"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6015919903041174"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7084764319142975"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6937622571225031"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7792569118204455"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.757483806019597"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9199719340909971"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6787982618782187"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9182712646817102"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4157964199110562"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5689207393570224"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.17474661367512634"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9342955733688687"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7335100734326121"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3766141182337348"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
