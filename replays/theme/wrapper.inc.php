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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7830452621698447" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.2716962967710288" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.13615973998707354" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9663952068424397" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1568102825443516" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7639571562536338" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8848460955545521"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6545502573853779" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4484144709398792">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7615192046675359">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7761818722540603">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.07709170504947571">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.46154363600408743"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.909258312252665"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.25163398614998767"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5905511674941024"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5064815687617632"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6251179829726741"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9966027580925818"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8899101898858248"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9265352421227488"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.912126768091938"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2634591198334899"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.23978228474361885"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.773016778730407"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.014296410224487799"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.16063641725409972"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.08595707859563362"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7254458100814043"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8491937475392632"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7508645807002592"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
