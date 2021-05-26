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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.09844355220346701" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.37458503436226986" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.18580072060256536" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7733567606462763" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.07942473806780903" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9902674165457064" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.27180095588082165"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5062035589949645" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3745505343555935">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8220366295510391">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.9164174082841832">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.698523108950891">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19979577298682472"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8804674598244016"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9203839571521362"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.740190591439817"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.857741064144032"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32332971141344546"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.4803960265892908"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.20880092554837182"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.7055987097173491"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8427880211117129"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7202774114098347"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.16594997321846283"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.2495071504969344"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5943264428093191"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8222640107956312"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.943791357695386"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6753719519012356"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.3469815280596218"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.13190768190938718"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
