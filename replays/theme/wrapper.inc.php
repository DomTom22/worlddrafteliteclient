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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7964727468073582" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6475099931450572" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.25795712144435723" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.20736990257147903" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.637950876872877" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.314202520140203" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.36485799324874035"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.24515798119395615" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4497876244140624">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8634899337383752">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7018222946245636">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1385733251785337">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06304174705453924"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8060263381588568"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7055600187373381"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6862578193659188"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.987078416859994"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7799512840382972"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.08773495882287108"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.09279582189299207"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.37063209681404663"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.009094392627837955"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2695639253210391"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7595958137587364"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.35023711569302685"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.38972520460213445"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.25289040562590204"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.10949125862661058"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3332277582753047"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.09901765737032853"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.010637439173181384"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
