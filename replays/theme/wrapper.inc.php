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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7325927338457532" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6853998274835358" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5187271312864328" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.12002041424543286" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.06857330165199027" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.9577648611879757" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5649539772979779"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.002545999927244358" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6826560789573672">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7785472167504357">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.2471995757734855">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8901639114611886">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7122129700042601"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8228889140785689"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9778809094225"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9221504651589496"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.017997154440476004"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4971796981083454"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.4202847556655971"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5853464012210059"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6144651635611558"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8482094787478902"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.3803380901010993"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.1192274871218224"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2822807094122801"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7616174911368849"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9005800989525521"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.8146802135666185"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7533907847767403"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.10751700952620546"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.859339714351949"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
