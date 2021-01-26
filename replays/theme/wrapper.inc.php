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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8487615626327902" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.11626166372431479" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6113822870116643" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.28405139314242445" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8995063539814316" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0481656355065776" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.547165918167571"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.9678593238393587" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9740007531628474">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.04226935110557806">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.27109869892040894">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8596143218366843">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22183139698003296"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.842302346323865"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8099715859624075"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7067960109779192"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7030840852961933"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8593362406549179"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.11917489325093511"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3245206579683835"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9639035143549137"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2768977746368313"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.020420516424080715"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9586372034129635"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5207026550192848"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.07794468282723299"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6371011983750428"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6688940654599005"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.040917278435233406"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2390758527643133"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.06834735264909031"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
