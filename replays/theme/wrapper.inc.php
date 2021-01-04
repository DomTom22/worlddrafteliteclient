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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5343009819748978" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.40139309312803806" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7546459656265165" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.11070987379730801" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7341048002875064" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7293126718384317" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.9771056154165869"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.1858392278748182" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7250412014192955">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10163254106686415">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.0483052356961573">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6476976515671427">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2612228297167791"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15075859498860678"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6289795363620523"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9552459060622385"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8682338650297261"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.679617229480056"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9301347274495186"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2796707174248634"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8535571633967933"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9265573547030121"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.46672943271536393"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.521566405798505"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.022843833619120568"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3832944493108401"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9210137780778409"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.31095037155716554"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.47446595000511893"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5875652583897455"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.03631459471883569"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
