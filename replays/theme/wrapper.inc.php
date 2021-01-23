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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.31653665292467514" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5772983052601408" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.5239672981615537" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4902613649221963" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7712016398117634" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6070008443358053" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.9257472394765107"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5115686605854479" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7820959865287795">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7902218701975054">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.1733288979808314">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.2385670966586695">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.056415810825906965"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3945429727375722"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16099146114545482"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1759784674408349"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3281727210732224"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06761794176526426"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6090828024911403"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8903772129200915"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.982888163819839"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.19372143312463308"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.18196319258359184"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.13433447358176243"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9427342403825791"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3752907156738079"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.050074293085182076"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.05089370988900277"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5255354081155594"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.29425463120085493"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.09490404538337205"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
