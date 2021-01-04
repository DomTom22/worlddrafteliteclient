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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.728465529975006" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6769183233518872" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.25111166736839485" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.28058441487935326" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.37504713592294725" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9266049614573146" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.12045449944105857"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.9880011151803767" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.054019086033802566">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.768543149124207">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7742908072478312">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.26781049651601685">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4340768967071966"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6582301273324696"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7558710603603571"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9503027919094971"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6177727789064222"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20078854171065252"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5714364345354084"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5261374896507094"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.02957881401228435"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.28404197542875953"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9247387217456651"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.24856097794821497"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2251969476873521"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9148805049238162"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3602582885261034"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7596217936273975"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.23071606707352754"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5781498464775421"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.22606332172025434"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
