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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5913658789033744" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.2646579133307638" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.1820353242708872" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5520592779115845" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1144383840757579" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.13531728961331035" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.9401275884663283"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6332005784226107" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5193915172779073">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.348892629027751">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.08516249452539171">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.42190338699908647">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.041853362451006015"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.48706532736714636"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2510775580305138"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5365603816077662"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.16069529961109486"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5887137906592339"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5769505706374936"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9549446038177467"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6569068208028737"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7307652120061312"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.43196886669816403"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9973194798636891"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7536766907240549"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7432879814452922"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8013063313460242"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5848259808797718"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1314222184910263"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.780824953675135"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3457953626179806"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
