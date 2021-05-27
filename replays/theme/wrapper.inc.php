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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6806623772408034" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.8374597669195842" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.32469870674578205" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.3116990079714983" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.8539653747748317" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.8257071106767742" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.064572226945941"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.2854737690411919" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11259606725108595">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5010967056735098">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.414405341498413">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.5951320463997232">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4160803075803956"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.1718764150841785"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.4076286772584836"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6744501483384227"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.09386323250794515"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11544688471280584"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.4513586117076951"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.42906844794658117"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.5617250882031255"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.9535511834579191"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6986620170308078"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8795911855644201"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.33814764274496456"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.9562056378736374"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.11989042018887286"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.3138683708987151"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.2469038301455806"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7788012810979799"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8799936888638875"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
