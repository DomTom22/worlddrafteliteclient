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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3092336141383283" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.33701940410373865" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.3718881934675291" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.759657000675495" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.5741847826602222" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5929398272708708" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.877809869851311"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0679418323968195" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.496693439308181">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7954580364184638">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8817949691900007">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.009436030151849906">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24676392832166028"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9403354888640993"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.7753560589333386"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4059843202901623"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.11045369405072658"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5190567966946982"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.039662190948261955"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8099022216959868"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7436851836115028"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.129364885465864"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.3454632493887886"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.17188159629241628"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.28638270363526463"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.16160217489049655"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.10141354518542367"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6566848273880128"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9549391593845908"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7508451474674767"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.1885137576681306"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
