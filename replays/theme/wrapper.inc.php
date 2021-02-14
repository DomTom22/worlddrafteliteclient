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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7468449337573164" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6684852953493716" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.051226746781771304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.676547413252685" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.15312582585480827" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6995395687776265" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5716760188794388"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5203854611530807" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9589505056272505">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5255854086840903">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5631478893834028">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9321200811424906">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9750484857539046"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5602473730395476"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5130681943424842"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.83518932479411"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5052591375098994"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9708847608955236"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7842950453432227"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1428778268742974"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6712738608708255"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4953415326413817"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5698074422701143"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9005832716875575"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4049880583755876"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6192793993554098"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6086256964677859"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.948784228247828"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.09939115511388774"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7973990625179861"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1208302731342572"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
