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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.013572852250665957" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9353445665793887" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9226572514599898" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8062647344316205" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5296847400266229" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.06548659188712747" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7383719880006652"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.562586455496247" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5246890388994803">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.47840993673656107">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.22035357554430868">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6991059709848719">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8076873143824166"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8321085764203819"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.17086174361631667"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9608790926956376"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8443070679883915"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.894666407636374"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.27745693650500236"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.03008075325623749"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6258367153400295"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.839315705628433"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6328356065387892"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.36686100494676555"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.19789490721151637"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.35716548011375004"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9088538295702477"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.966663988631838"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5871432468173146"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.39112031697011074"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.29369958921039974"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
