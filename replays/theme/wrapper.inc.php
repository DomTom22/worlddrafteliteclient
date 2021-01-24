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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.29862433689482115" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7837555702455143" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3304242865424136" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3557069037293441" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7069596924747863" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1020080996269197" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3419015376729255"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8734782422098695" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8565303475466541">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.016698003105431125">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.30430812523363215">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5052339774380701">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13975238029986103"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5509429199646925"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9807652634907413"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20796933916556704"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.602642575469386"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18647176063581616"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6612897052842142"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8991924974978691"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1541451700270191"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5454757562317252"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.39099678806503557"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8873870431410384"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7640458665179084"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.437134422062317"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.947865887937102"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8535353279700657"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.15168691377581944"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8689550320379378"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.30810936832699065"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
