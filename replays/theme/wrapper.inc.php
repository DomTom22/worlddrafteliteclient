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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5056924953917632" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.42814468157409236" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.17556461697364578" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.1720442089137475" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.44451730753867325" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.4607042261348835" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.8124118800068283"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6785150876857589" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5274542445806636">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6764052545711903">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8173422790470826">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.3636766826028186">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5824827073255214"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9058296903393457"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.4464930299227856"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.49689148860698573"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.11181879874714662"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5235522862419368"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5231415179068408"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.19682910364731931"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.5636203474255825"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5702972653477436"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.8127237342865032"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.35646451762439724"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.491340752005611"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.4868853512113289"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.26234164939676985"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.5109697269556406"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5272251698741117"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.0996801991467886"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8554736694723282"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
