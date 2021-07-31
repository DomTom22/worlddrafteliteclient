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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.12661033864784121" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.047794484160502027" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.2845306864526014" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.2734477533591415" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6211435281819075" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.0425176415045323" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.7571098004420154"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.04353854064299245" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4771464694395404">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7556089984368348">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.6727466692403803">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.08185988368180985">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13802177999035004"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7476087253361572"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.054548331420869456"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4502489277337174"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6059669133209706"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05191205682292521"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5280577024755009"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.49491917567423416"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3905484203265257"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.17342271710479906"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7371739089301133"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.32904193034912255"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9408378714320949"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7489272483493874"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.2989461440100285"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.4368811384356839"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.2952117215647998"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.27632622559176734"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6617933084578584"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
