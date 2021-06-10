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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5506749210799016" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.6833208576175045" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.37990501678439226" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.9512559455662069" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.16490718394178439" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9353981273106178" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.3235779514497541"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.125270082472843" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.021838601359814636">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.668939895333452">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8586290429372552">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.4593108917577502">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.758034398933255"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.21617394722962158"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.04337859072807149"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6239066887459443"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.34341094051171184"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17016624089223753"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6341715893375677"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.30590507738564"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.28851564498203697"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8247830666207014"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.31977782172255487"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8585732398555299"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.02713758353952045"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.192480555035224"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8528052484133524"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.9803210580161135"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.7701433773894333"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8047486477777412"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6992152602540285"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
