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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.11196195777850981" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.832099232594016" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.01716957138091857" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8884433741043534" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9220578722300867" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.45864754639308813" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.06710547595786909"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.773332194303439" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6966301680131064">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4110412740073477">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7465802898874867">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9119364318051146">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03537647397943289"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7602296038037133"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.38422771254565413"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.40601036287771475"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6402422964058399"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9482606904784101"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8436637552762001"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.36261921838718947"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3947030222730179"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6353683003558139"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6236310415153357"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6882554950146458"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.27326970286023733"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5143070772416665"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.14579390131709813"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1401734971898727"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1155723459795841"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.018413690272740535"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9148009955252774"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
