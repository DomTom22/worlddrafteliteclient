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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8441513789898933" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4404685349545847" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8701578928634841" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.39216790087342823" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.32788216012704563" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5743658117074859" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4787157450133157"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8736406816790387" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0681303387306742">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.441166727873203">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.1256999083222914">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.882885300949958">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9386854406416962"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0433421252837729"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.04344629509977049"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12609983995053797"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8734828181547691"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.45933205367000607"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.13657027901405838"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6276662311540542"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8162385610298581"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.07184724614323246"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.830292115977393"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.22036361625088086"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9687373764334353"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.26382369367461767"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.927625578388612"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2502522388858579"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.058891968094972436"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.78066856081351"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9288633042087204"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
