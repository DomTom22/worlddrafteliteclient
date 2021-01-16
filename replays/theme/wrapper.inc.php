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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.67857289662387" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6834044413570672" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.32092169736744425" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.16810367622533273" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9024184486695692" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.31414909492064824" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3185713174267335"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.973438378806704" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9632982453990797">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12800969901729053">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.46316118575913734">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8732798741474086">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.004715640177222147"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4518936486373111"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5038765605503579"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.015181295900808411"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6725611906447271"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9662748987676562"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5516155763902102"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8059340362577485"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7314646207496387"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4345547082742913"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8703227092968002"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.32891987533330624"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1697904623839146"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8112246622024504"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.14550027339461713"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6860368574043829"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6655612145511907"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.005611541065974501"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7324695664257199"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
