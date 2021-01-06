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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.18152013484598561" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.35380836427033" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9944346595880991" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3640112845167742" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.17873901803446435" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7832582855728978" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.2765010164784891"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.0339145096468203" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6298073452734387">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.010553082055348106">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8384253332256835">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8883348961700357">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7316902347865213"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.25918556487925626"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.283990704327272"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.016326672760613947"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4635618004062625"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4409699451158615"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.014282348508610099"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9672468327156496"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9034285635900474"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5410825732943627"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.23294679372551363"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.46672377286705946"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3957407668170916"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3896903330292376"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.34742943872125887"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.32439117516478433"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5115349930886066"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.07279560126047069"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.38391184159454883"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
