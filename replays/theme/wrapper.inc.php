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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7344109871325668" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.09027839027749285" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6325067332755077" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.09962423865937398" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6660002554229816" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2983655927818156" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5615689055372859"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.4923356462577546" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5357330408569085">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.984528427547134">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6085032145077034">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.005780267860592048">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7635896623957945"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4630165940769482"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6210050783278647"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9289979960900976"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.886251279053829"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3192226134908096"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2388926215672258"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8345957664871873"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.36383553857040907"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.40003382363030626"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.24576556945735462"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.20702462479925465"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2630595309932833"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5345654485012292"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.30642229597888715"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6852217213056901"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8826951984722304"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9826756366572253"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.797683219592811"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
