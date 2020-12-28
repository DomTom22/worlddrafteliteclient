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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8405702273375748" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7124876371638551" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.2063769500803445" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4734407642456584" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.08891801309986391" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.11317699543929183" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8944841543099256"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5489397591499021" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0058146012136004455">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.132395228426742">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.32038097950472744">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9588089615943098">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11617836114137314"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4890368683130446"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7807087485288042"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13477737849025617"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4368693281623719"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9803310295695977"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9328971486288546"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5303190443198003"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.43513524833104666"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6841196154818612"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8350192408629669"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.22286799732769236"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8242484628275883"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5626776786662278"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.056258952908220916"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7728132436641453"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9348005228650431"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5625084315408413"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.674283722332796"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
