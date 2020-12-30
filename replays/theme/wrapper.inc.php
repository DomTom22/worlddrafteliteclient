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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10047323647245499" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8050619823549476" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.8045785549777529" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.26911858050996584" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6672816443289404" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.47944147351306876" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.12431690829730857"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.07111852958671894" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18278719632652773">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09370460128944935">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.4125991242874971">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.23864141259897487">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08294835758660879"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9405419644550621"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3828101772904444"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.038354587234273874"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6416352747114877"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6878508466852966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4397498838510743"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.74854832847848"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3989134622624477"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.45281537358133206"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.31126098071810526"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.008678226960652013"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.04023126133471444"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.047677280499021535"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7291150972583207"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8823714663460487"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.40854766397916475"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5093835643842686"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.0923742043483089"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
