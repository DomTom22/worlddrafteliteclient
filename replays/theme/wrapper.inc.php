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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.18000216952187742" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9577431661868854" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7193890079283125" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8774939391952385" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.21460812467958035" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.912072091912896" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.687112860577711"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.10918347416827068" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05096456087184098">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7946874935002557">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7214234465863514">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.549431323758039">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.485993299812717"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.056232213349708404"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.40379882851323323"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21546117871575565"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.641209716125241"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9550159459277139"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.04630593747266332"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7908702147385593"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.46512719557767435"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2348621494517762"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.32611418908598333"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.992351242067071"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2446382734165744"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.25685614413502367"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7728867208244803"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4597718648900415"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.08894749296706506"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9180268684670381"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.21472427772614155"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
