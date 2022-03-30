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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.14407784597820283" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8367506571915306" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.017600174218465714" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8351304566009377" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.48167796899584037" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5823196450193282" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6265688306802892"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.28287154301944284" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.755777497525302">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9316001420047175">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.7713580031129008">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8336682312105759">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8428337312635363"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5582614598143609"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.11618700837340623"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6775794318560191"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.40161452726871305"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.34325535431364873"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6522377244959128"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7915269413631651"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8247079548759062"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8725650044542195"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.47611683124461046"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.10848089925927162"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.4338786663523748"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7850840967961716"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.26212691001095867"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.41301046421485355"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.3312817208630443"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6026954237600879"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.17916117764475148"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
