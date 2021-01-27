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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.34106346476053817" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.060710583036118315" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.09847727508297832" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9460984340639591" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9271315365881845" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5252546784993759" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5429229595822795"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4690676278537358" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.31532676625845824">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5966758355829891">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7802848889375162">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.31617093810886066">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9874563719966953"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.40161690624051594"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5886648952352849"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28598567532890873"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10090169604560506"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7572067460179117"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.08262703435976704"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.029291728279569718"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.15791347353239882"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.27100210378351974"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1425575359970752"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.45400572808156103"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.44407428890176526"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.13182749047714237"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.052651568045026576"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.03690339891084338"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6955734147214343"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5865587206998475"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5228626289825675"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
