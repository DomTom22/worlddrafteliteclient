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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.9426986985682546" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.2895462352365996" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.6141965568251773" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.6146258462617511" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7923246373942117" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7855325483639446" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.9447187120466978"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.2223969698800552" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44436797171586306">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.04077974118574068">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.9071566553498445">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.976385248708443">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.144760633236797"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6102307144375392"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.795597964248477"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.96328361381473"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5887312495661257"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7273976626317844"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6230557798429566"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5053877406010896"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.459941198756906"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6031097689315117"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.24584195819052734"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.8641937345701631"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.23568378365785625"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7003209973450262"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.0003026197926745411"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.38778505479844005"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.2877617082499835"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.08907106338740012"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9679805825765071"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
