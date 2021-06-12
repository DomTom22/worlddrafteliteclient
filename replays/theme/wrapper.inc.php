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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.9375277151464263" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.9199574464306739" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.4848024135563591" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.3212309803969642" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6554730580777552" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.24537966173453074" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.40362656036538147"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.2393793336868304" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6059796517705656">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11521431575318641">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.2958558564471492">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6870672670776401">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3507344413508169"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.4862324643542635"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.09042408437763627"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8495628471199959"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.013247227875975653"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8205117024876634"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7905751592669448"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.2002082072121456"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.05226838042099091"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.1767041772214848"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7165041673902746"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.09019464872493943"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.23551113725997075"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8697761250463885"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.4010353704395626"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.8065503195278727"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5135441029699586"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.04718664339815315"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.7208404801395647"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
