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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5540381567340158" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.610696494868451" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.399179037521171" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7799121429237397" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6686952164000564" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2154255340025819" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7774278349469348"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7025763113048287" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5026102012247804">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7489078700590561">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6034608657629696">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9706132252432351">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20696512935303257"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5283480043290736"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8439373279514162"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6983551893115278"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.06620138614657867"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9755346009206285"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9431785457898265"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8648466866836162"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9349695161373441"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5497470789134584"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.24774150389906113"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6033120349260659"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9735361766664494"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1820146207823108"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5934667886689586"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.22106760828010508"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9843680060099487"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.938475751943729"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7232505916154994"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
