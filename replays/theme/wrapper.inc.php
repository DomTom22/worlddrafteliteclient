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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4234779616107338" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.04068675554567647" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.48056186596902584" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5859875564621513" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9352124940764761" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.17854050773480812" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.10239503947409268"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5685989437878587" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41703520784296266">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5562679121113507">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8633299142347906">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.12844699040111585">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4088346461281507"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6317496197060999"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2390242759791028"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27313552489543547"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7396285261583249"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.761138347177537"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.12802462246277946"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4873889232298647"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.35105157171545587"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7437518367034286"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5357485332617817"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4968449214674491"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7415575141806683"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8811568186876222"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.796486805956035"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6251081872959747"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8023708642167595"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6246384319515614"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3456794074704408"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
