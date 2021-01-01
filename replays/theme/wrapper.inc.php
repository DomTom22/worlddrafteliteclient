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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9879017171767737" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.44415734361822934" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.41574190894086405" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6247388740096831" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9834257430654547" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7154176025842431" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.9834462065033913"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6718797538902894" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3554010452805121">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6586721383011425">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6007481122796137">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.0069964158437905155">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7123279787397856"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.45447001037583123"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3257257423277329"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7506959322334898"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.48481690107272346"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16843993551413816"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.32119798903334695"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.33436741528169"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8128919413916138"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.31932375777936284"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5742483225898019"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2813115765942191"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5289494229594858"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8749346810344327"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.26320852150647633"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.597352149180141"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6511899815991393"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7261261379954431"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6489609151417923"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
