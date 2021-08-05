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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7831919195162649" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.11082925679970912" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.18131983014354702" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.905938128879151" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9914046769511116" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.2583558969284663" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.3435135968610503"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08970618394581886" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5595520502985265">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9876943105227096">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.2687310237323781">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.2413141158551304">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5986171812756436"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5443002207597003"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.1441360966121641"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5705827761571072"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.936096352212118"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.41490245960180516"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3091286172571148"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9652250791203763"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9132361793644228"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.03013790836522201"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.2637248849455953"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3402680247955576"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2328118304743858"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.48989022612480015"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.01072314582074485"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.06345932926583653"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.09879327369448987"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7217456929794044"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8760598012230723"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
