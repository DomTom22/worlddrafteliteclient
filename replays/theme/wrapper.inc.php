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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3068762881274214" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7020214762252432" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.48206025656133655" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.18303023558943643" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.44102348635644506" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7302342526626637" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8609234199163078"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.47635652097125547" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13961345244409373">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05276660239363684">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.9124762749556026">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8993768702056646">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14849032911100002"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.17852639292938188"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.880526890444582"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9511511622241651"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.26205984550098704"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3145981882137734"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8169313383945906"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9273157626434487"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6667313086363749"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3587683569974871"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9449368717937696"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5209585648890656"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7695910566130326"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.12176220093817558"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.964011451639156"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.26272352535141485"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.24104410793716213"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.16391233681292472"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.29720179379791833"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
