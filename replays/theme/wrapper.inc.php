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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.40946200204102867" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6079484167765861" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.5446550213364032" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9463631969571265" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6742088597722371" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7937138778739978" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.32361331090265133"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8316572071338955" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9650118878133271">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7725903867468735">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.807206032983995">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.7591061337037965">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9366190299471091"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4592709951109133"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8980118630877081"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9056594929131068"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7070842642536828"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9556920111393163"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.22755235243627836"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6446296479242624"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.209130009082237"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6653086221160416"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.22870357582769185"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8072516165952512"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.42573280299429594"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7872041965942913"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.12362524628281402"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.26992828549145687"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9241165771039195"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8693056660747966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2824872109508354"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
