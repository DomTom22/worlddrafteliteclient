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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.18173888195140497" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5224767786893627" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.19958848896038028" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2505521732332914" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9596470029050603" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.23852473893371262" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.19455337217871493"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.00007284282226693861" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5001175039457337">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09080202469698717">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.2076332131951415">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6646750607497613">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4221410691360894"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7938501895422256"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.37682423338894333"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04719539329178257"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9249144199501838"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09103071299335808"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1809457344223837"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6299377197214677"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2922916141145939"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.21053443777400704"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8880270255677416"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.30494518234741586"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9569942176905928"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6603864523971972"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6054531070627986"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9380739647102412"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.0013969440494572272"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.01606308873099138"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7289950544224011"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
