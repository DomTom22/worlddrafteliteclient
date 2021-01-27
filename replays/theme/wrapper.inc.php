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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6805242340641176" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.12109792184451251" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6907417782981571" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.05388446251022194" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.802069358664306" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6389356120746263" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8232100887561278"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6740305263698945" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9999033817024592">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9924296948504319">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2946856368924957">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1801971920620411">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6329600547187122"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5116158792839698"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5839358221495035"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4390758759743558"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7919076902936937"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19125921007651558"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8854125854089738"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5624973017902486"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.36622669574815614"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5023372558200623"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7084451206117321"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.28823619896916064"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2292946307680095"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.900565694060034"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2810441981029732"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8034569531863582"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7620488746474505"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.37797623056749763"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8462484457800434"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
