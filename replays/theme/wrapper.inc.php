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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5155417231563637" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.4176539525142722" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.39686149942479965" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.838850241993083" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6515126330478234" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.13788656295920387" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.8230493474804839"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.8291274484911251" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9101058161147395">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8594659421231099">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.718952244591714">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.9102767170686825">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5744344899516081"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.18938997874311636"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9556572846201592"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.008584234363026688"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.13694904260054663"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.049145242973032355"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.960751158374489"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.29085549110274656"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.5107094334594924"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.37673779238295446"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.8849134446463176"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.04760009741510651"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5883378350318702"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.7511721081070144"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.21708600281868828"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.35509797056496084"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8293209938475901"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.25916240222047415"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.3491265547746025"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
