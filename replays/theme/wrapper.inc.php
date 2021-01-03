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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6889355382608773" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.2858805639295672" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.06453453467891856" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3293845718590296" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6052980265289138" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4179381897481249" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8930875159133702"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.9346024250239728" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1744973842444424">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2250539038587256">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.520740457100658">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.7885674783279799">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3600928861407877"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.21632702768327317"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9384841448890311"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3759135786003083"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.267624000540152"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5386634680273086"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.14943515283789344"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8477876738988053"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.31602617338391736"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.28811833270777365"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6405385410749969"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5021098156912207"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.44659689866998487"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9216119168283057"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6523986154811185"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.31536306270366876"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7265388138006519"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3498466838103218"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5159273615033662"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
