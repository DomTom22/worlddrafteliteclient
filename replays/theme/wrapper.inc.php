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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.31193271996038296" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.4965018045579208" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.8720377609091174" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.16836208628766447" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.16553412297083558" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.2513519828811226" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.45574928753764277"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.673713397487574" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8961307097837987">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5748686614571901">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5463370073680607">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6513775280737619">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8568584873702731"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.3565467777028042"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.932536891965877"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36257826219239675"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7365814517171585"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48177118370288197"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5274383131246645"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6533080765150674"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.9022905560078949"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.6847200312374626"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.013644491692248462"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.2221830584300084"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.3665671824884149"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.03385131695163812"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.29754711376339027"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.4763118314618193"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6168571301566166"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.5007197131245942"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.3518486357493047"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
