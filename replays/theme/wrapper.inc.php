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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.9908590566970907" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.11447314734744607" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.8960862185403233" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9321893558526333" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.31003669118316735" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.26124595250477634" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5115649175322587"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7918778707608771" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1348180076131753">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.29688509005644614">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.3281824861191234">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.3773779238558166">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5019992236540085"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9473316756138357"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.368034621789634"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.310506926760183"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.3607559562959586"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4928896934905822"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7322700736160095"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8379061314507175"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.24264327619108506"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.2981555037245409"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.6053907762778794"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.001162509851015514"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6700581541489274"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.17573422529766725"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8648183765198667"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.03727614510491639"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8134509347444892"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.29014153217284067"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.4848472952841958"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
