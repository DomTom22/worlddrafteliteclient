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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5916055728483605" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.7425742381312845" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.013458033142845327" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.16066760769440447" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.32090681440349056" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.10696606356473048" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5599500863392357"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5715971022995736" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9847183083668574">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.18546441254307178">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.7784938906114491">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.5543488738335489">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09524504223998909"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.3344627321187599"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.8113638769337881"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29542443973048194"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7339083254124485"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5042243531591253"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.3323848768532336"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.14693593309136888"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.7667526848443067"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.38783294084172804"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.17728883511606508"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.15929489160114763"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.9102886825238474"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.3515612595668569"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7821277942541118"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.17416211838240092"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9570541464156004"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.07852969204857763"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8745644385780997"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
