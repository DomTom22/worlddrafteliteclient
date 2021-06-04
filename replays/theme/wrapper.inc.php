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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6649802090080241" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.7526031200868759" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9639316333099384" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.942966792283177" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.22706881049692473" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.7515918068517939" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.909463414274067"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5621622387898462" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2501965943803597">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0875537216428719">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.1352545566717831">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.37750128862188315">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.908505638392086"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.4019273439567854"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.33222625939360806"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7795177644112696"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.4393658502825766"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.03465256056114674"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5613028961616706"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8864641662228634"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.50438331638303"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5761749671947964"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.2592327970822761"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.7583693358923369"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.3725831355417397"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.49757503072891685"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.48951212936699195"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6364551339629629"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.17712568626740155"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.4132555604409782"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.3406146856171002"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
