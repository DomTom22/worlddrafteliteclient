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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.03334902820057706" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.12742382876530756" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.8284527044783887" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.9345923791600557" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.18951392725269245" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.1355466830751637" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.11648393416770997"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.35187225298176794" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.046568667600522806">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6802884339575237">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.3548369403475271">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.750780368577864">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2176332088769295"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.2196149601318167"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6033248407713367"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8227675486912553"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.6193082138657091"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.018399749242021146"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5420641978195562"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.4464596492362767"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.574023296352332"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.2707107839908083"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6491176418831279"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6922200109492747"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.3496342071310712"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6055030169495592"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.9782932069839732"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.3953765650585701"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.7689255902624512"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9035053582108001"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.239762916676042"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
