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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.33109202725586284" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.46746106284919264" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.7343698258451767" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.9274735605479256" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.03651969124655863" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.8100396596874098" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.14079140222222075"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.8918246101144274" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9939256004107742">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7283426077552946">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.6157427847578179">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.23134507095623036">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.992592137545049"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.944492126308804"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7942909917439387"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8760086125087068"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.49897841581269464"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.725040215248375"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.31168193086921847"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.2143616381622726"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.8159793213967343"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5271543715926379"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.35228527161398393"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.529632849288888"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5923064100067048"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6250410900499437"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.3025028085450925"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.4248889096626287"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.3872903895393285"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.28146556389189126"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9029046055211585"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
