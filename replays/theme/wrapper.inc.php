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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1975856201887729" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9950679467160835" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8861605147598168" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3712207392963136" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.17761845172754676" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7895979547522236" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8446584042986536"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1312443257805591" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8372153266999518">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5054616288672449">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7937415372668837">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3751415211557443">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7656223069723482"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6747112345458768"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6174341371919114"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9774055223077702"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7432532135334491"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23886304783248669"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4769529073858154"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6224640423431196"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9927727111615989"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4180225182719899"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.08736974162510802"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.23435750912312292"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9818599033028119"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6862279693763438"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1490854559776107"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5952532374723547"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.07694705481549557"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6580088304531899"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.47714814632437674"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
