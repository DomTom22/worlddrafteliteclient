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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.49795298899703266" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.33220089650594287" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7379220233317973" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2976792630937164" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8794577205419232" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3304216831570852" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6001540627645401"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.16042994155708956" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.021953547920437133">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.037897723372087855">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6630781467873594">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.14272886725193334">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8300110517543571"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4480921636644051"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6937825788452221"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.33691520496703986"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5237328269441137"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3980112921984793"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7888429360585156"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3707008301060233"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7088645856998597"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5068790215823253"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7350692192986938"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.371543215098028"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9632923703942313"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.13549155516539457"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.15131937830563502"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1752965640979527"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.516449398555576"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.17322904083779656"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5966645706538165"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
