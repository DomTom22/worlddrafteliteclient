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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8145276072459708" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.49338324933004296" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.2510440268351912" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.10636355224515515" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.06022934060787932" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9998258257492914" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.03294121890400681"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6009727037806214" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06187350972542238">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5757228161336407">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.015497758641717763">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.1997669505483246">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1764905592319801"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7822487160100156"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9455696453799705"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39213566398157806"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5269745665507313"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9615336752679995"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9076061959349699"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9137544592744287"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.07816971358579439"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7935407416882991"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7065473104734479"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7857633488652176"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6932170152159993"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7740918092817959"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1499724766343451"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7321882672817512"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6147544386129389"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9166877031023262"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.09439676250416507"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
