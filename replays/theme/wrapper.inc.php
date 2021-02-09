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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8588013067172533" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.265337903536943" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5601093877709249" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8882508501018638" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.07750612488685737" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8709906555202354" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.31632108885289667"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5987337936049666" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7833818202910259">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6117384197857758">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.10871569056636443">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7705200026078254">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23799871023415609"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9266656733020517"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.23410390793809843"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5207465084240697"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7520890823382798"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9391514908844973"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7936596850805426"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9455501778555984"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.12581576085312185"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4048692833731582"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7070726093704949"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2012687777769755"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.23373195404101965"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.10222865011052362"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.849096652411435"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8750361369310589"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3702784066967404"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9398761160321767"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1342091020396221"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
