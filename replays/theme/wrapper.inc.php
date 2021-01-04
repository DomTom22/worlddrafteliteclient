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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.35607600750643065" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9576132578236278" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7478869042610898" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8314035676982625" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1296984304508897" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6659580914301266" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8515898367884276"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.1167123828146599" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8924755023766962">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08664249615655484">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.379482337948144">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.2523145934619111">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.703018375809525"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.46969634821436834"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.23894488388781188"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.520225256783547"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.18934780754946234"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7436821512925187"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7860080335221415"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7040340618360581"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9549152299171957"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8974120197566133"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7947377985010404"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.0036726213284334897"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6737992055661897"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.044584471687128424"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.10808822360560155"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7509879844783423"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.33259720299689377"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.45745228253956216"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.20156181773767634"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
