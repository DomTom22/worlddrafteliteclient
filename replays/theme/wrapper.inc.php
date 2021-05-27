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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.2968279329127801" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.34143303795189195" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.3822577583185247" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.5642728390079634" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.23572871739319257" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.6765875821440004" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.03931708423721281"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.9458049931643162" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33981092963458703">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10893604124242229">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.9217216553719814">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.057091712273631634">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9741052520529949"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.17477594105934924"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.760749350827562"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7372950700833782"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.5039921996553316"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07114078828574555"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.3155855852994003"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.10942523134704651"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6481346977625189"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.45681295409758715"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5145723012519487"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.9605442297996853"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.07364885719952574"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.06521951759139255"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7196225795518201"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.7826269123788605"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.1203851023213176"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9173453135244722"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.3566214662521059"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
