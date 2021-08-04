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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.47397133294196525" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.20671284104384546" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.32741750703378947" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9410546532931603" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.364997624553306" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.0064304677029363155" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.13423055342325219"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.45239976801152393" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.01632193738090959">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7049159722095086">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.32224141161488906">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.8205670360983619">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6836977225763685"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5887033844537886"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.35021106902582977"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09815452536518254"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8452908512609987"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8600253003799181"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.10785306981805665"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6090931130369865"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.626786127694763"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.06377794397728054"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.39099417079461074"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6236658002658548"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.12075530241613053"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6557023705045348"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.18637938355662764"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.4600228060423506"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4276823061777122"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.25417820814122205"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.4385515880598536"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
