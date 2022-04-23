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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.2615551734788675" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.9018733822852101" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.1299061204003782" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.02418813182516888" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.29643302251439185" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.21749895554260457" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8582270927617037"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.38020164394098255" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23793858570927418">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2256566753965361">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.0949323314131858">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.33670955511359213">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09650699365634319"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.10144798061525973"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6569550826150556"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9424944224615766"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7202885006801878"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5297372111808469"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.4142805738199311"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7409280912244274"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8567891181262433"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.11762517360218538"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.1599235449593519"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.47293952852233745"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.3448656842430873"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.554412087757423"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.2138044699666215"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6602395858266952"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.6897534351691397"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6821905035519502"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.365814240448632"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
