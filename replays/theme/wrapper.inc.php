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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.27125514444109444" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.13294212497156344" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9538275689533011" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.19055103086052916" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.481179326669092" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7480682080643155" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6768098370757671"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7893968638235105" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.04274576048158085">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8338887792148681">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.23055277976744137">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.24869022603959534">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.040888793228263554"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.47693780798928587"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.23428968134516182"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6763536840577669"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.377635593735433"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4930722358124593"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.649947848621584"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6362518643619159"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.019324541299140963"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.23634822413817447"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.3414445440790945"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.15739551355840242"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.30570366297864116"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8388379443052583"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9978237634306986"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.8408678763307516"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.13407230860497799"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7142139988851419"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6631124304946958"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
