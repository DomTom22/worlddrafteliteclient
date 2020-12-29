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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.22624888458295533" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8098444484697598" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.8223191668393812" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.15512791014781047" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.876191745271317" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2560836702882381" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.7011557904735066"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.9630821964178042" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20198875213070266">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7998185204224653">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.1733859568305065">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9686937440998076">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19800924192443614"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15189777486066136"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.49310581871824066"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31913829288859175"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.0703430462403205"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17068092897639087"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9140270726312554"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.921672840483909"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.27574125146490935"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.24511010379482445"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.05454831843905583"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.44378641379180483"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8276242835891956"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2716687804942737"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09115618514888024"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8066436780391981"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7762086537618476"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8621845043047962"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3486757591879135"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
