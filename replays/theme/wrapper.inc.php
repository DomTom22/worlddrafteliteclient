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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2313994193121498" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.792521206247663" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.49032730438962857" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.459446044163359" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.659097984729611" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9127702957773214" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.24170237637350578"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.24143778231123325" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11169506456443679">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7052750093173927">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.28056227405308864">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5888066766246673">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9970095373328849"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1399507868698675"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9700477294294882"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6155704586139426"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8128620040743144"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3472840885624835"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.0962122158693719"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.46924546007103163"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.08343106035802261"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5841253963059203"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.14486439795123895"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8271435960834752"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9818537300175545"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4924102234288499"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.11291022305466347"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7519244712731965"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.21413372935906128"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14639661639589296"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.12343073459198939"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
