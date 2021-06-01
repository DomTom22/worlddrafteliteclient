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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.4316855998724676" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.8865898086745321" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6871637271775515" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.3624318921175307" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.053503989510702565" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.19042925619198758" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.23977303524644134"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.20850267668416445" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6527694087022491">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06223578638569194">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.785196945987457">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.3032382183253308">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3498534994070195"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.7558797400845734"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5261031531851195"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9411990306647289"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.3609774309259568"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8677144584829755"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.4804747073425113"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7022788631333419"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.8020460631713575"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5825886632061421"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.03693489032388708"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.18417855513333037"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.027137175494591936"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.3968296406138827"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.43763495396023666"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.05383850277245261"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9216020806609879"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.30660947056417864"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.1582077206475654"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
