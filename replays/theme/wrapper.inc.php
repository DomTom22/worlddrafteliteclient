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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4450006448270172" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.19087524851044568" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3032428084840022" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.06459670418774377" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1744320921416196" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.21962630939296557" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6534115913583192"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6291177563562549" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5554785171915668">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8947586762678501">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7840209768776019">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6672393714167923">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.401093365994863"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6952837097929307"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.220431677644773"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9639564153434683"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6711098427882725"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1384442441507785"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5697493671460898"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.09405060611953009"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6083648290753247"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.662000795285826"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.0054527761538831765"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3654628943533411"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6625415037703704"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2911544733720699"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.632916361595502"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6624318664444293"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9287340521448908"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7417688340357007"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6642277213686039"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
