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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.28790349771797397" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.9390914505311152" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.4195433644257083" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7430616790488387" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.13547062498425433" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9463015118815805" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5588156431331424"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.03360622647606726" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5058406623618734">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7168478064263459">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.41933743545855573">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.26983780870544294">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9005963545074078"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.014081195003982305"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.1918440852521992"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8909073875201587"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.05030761376598769"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.599515133326026"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8964083720391709"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6183165173480771"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.7977162259738146"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.3099217550661535"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7212016860735595"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.43931705108987673"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.9780837533552316"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.678053278243198"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.14773123811534883"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.2170610129039401"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.005144485770575802"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7625783635160688"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.4205376700288752"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
