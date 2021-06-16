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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7206181192732579" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.9017649312769487" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.3003300513414442" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.6591149580270335" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.8971668490947033" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.2004762283853998" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.20447574679244185"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.21832039249641477" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4148245349254909">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3852263983793891">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.2934246378466012">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.2604734204608474">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18189515505793574"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.2636604529138453"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9336871518349308"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8775272727301182"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.5811004170123457"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15516249270853488"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5894066270434906"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.011021816888238334"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.03311402923175444"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.6830898097078251"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6314269336902569"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.5366502432628255"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.20484103109033547"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.253700255364935"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6702174987029548"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.22367260704742242"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.1392385593875225"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.45053665791405284"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.44316376815637826"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
