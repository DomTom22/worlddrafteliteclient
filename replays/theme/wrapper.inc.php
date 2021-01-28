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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.21186591232318874" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5406645114320954" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.008095829876609617" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.20760199305243132" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.15938569604337016" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8011640091171734" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.13586458895021836"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7592588875262263" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8803788432673916">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06591262849178459">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.14253650128757345">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4012653017919887">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7513076674977515"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.18166846429336614"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6753475974392411"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37281738085393945"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7231873621673688"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7447203812038665"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4104441919297206"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5562267721755567"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8309160711954147"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4851467790444115"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.0897170000018479"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9502503394733948"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.09200393512180427"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.001268731716418392"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9490241879493626"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9923516570900222"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3281730827782008"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.09828993078593018"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.944519846188159"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
