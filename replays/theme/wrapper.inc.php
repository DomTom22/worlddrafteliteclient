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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2635719596386432" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.473138723197825" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.902042014776794" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.015878153913034154" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4158443848284099" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7776124074407302" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.1926677954464251"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.7286693215307867" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8925872367551813">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7106717731297796">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6841775170912883">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.28617266730411295">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7172090196976117"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.26715430372468196"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.04426192896060699"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08878831264602849"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6531388437624539"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13472492431857597"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.015829384917040334"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5560247489038395"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2943883841063186"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5338470105216035"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5754602330962824"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.07341838310992399"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9353155414178689"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.06617151819905542"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5199494932810196"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.38535368037484874"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7491740400224416"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1665121278778099"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9504209040457365"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
