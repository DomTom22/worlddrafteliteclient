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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9470428785722069" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5207966958572199" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7865823202278543" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9625210437961482" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5589487180949304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7672753022573029" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6966754166097671"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7162785238675313" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8894954801993227">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.03310088653706145">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7324595825315909">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.76897722069564">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4376611780961055"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.03334733673553081"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4928106100615619"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20877900897736423"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9323386726751322"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.26811952864979904"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3956720602078787"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.42798343881800927"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5302378606997877"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4846697553273145"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.701045070238645"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7769442840969147"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.502134318044281"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8727033850870203"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9441519595302186"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6033481008773713"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8093947940264934"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.954282001145685"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.28364687593902294"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
