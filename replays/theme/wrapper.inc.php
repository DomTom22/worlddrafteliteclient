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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5427217328037239" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6554379588762436" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.12773001827005115" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5036311184914664" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.00022657230439437903" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.17170663694485033" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.102059387534009"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.04555359226124023" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13535811900358885">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09081128155377538">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5819832838123884">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7474234386260612">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7419713243621111"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7521768520388836"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.226939711443227"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1961142759008101"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.17097439053905283"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9162026585476948"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.4845913337903074"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6846213609705933"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.39910694463244956"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.36195428192498436"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.48188057628850034"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.4094424616280663"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9795309199530355"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.1307247520395911"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8908824024930986"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5024516907419432"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.45061279456988235"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9024745323460721"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6095402279630662"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
