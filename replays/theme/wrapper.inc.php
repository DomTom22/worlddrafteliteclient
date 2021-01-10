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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.11766463350488787" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8857224677746918" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9341236443782861" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2583661450630741" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.224953839817708" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.38624728905412775" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.06708732729571065"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.32948674614589657" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5101431347084426">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13405823175034048">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.5430746282504397">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.32034504196263036">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9335849545819979"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8355941069683939"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.03367402569133571"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7152582902579556"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.975310239082829"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05705550321331798"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6095001004843486"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2976384007512003"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.34937853053726853"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5524216406799038"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9312948260674323"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.09624880348772558"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.05488454959054012"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9659392693591511"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5789318594611248"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4110404300934687"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8423128326771518"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.43726525521356474"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.31661509413378086"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
