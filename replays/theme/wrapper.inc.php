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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.357665095527373" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.9612028700519832" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9465169160688229" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.3140478526383401" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.5397901721380496" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.37526914214514684" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.3558413615211098"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.19123042188163852" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0904566630562047">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2931999474883884">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8577521479210699">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.7800592589978592">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9962001904544042"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.04027309407005508"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.2458133453697724"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4184725729352796"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.6849018310186361"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1184025827014843"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8369246010460074"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.03515622063522117"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.08828553936974615"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8181676636840984"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.678856660676282"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.44066215141698084"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.3301418467944135"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.20016254087176621"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.13166323586013373"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.45293621787798455"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.43812514955038173"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7540222121692817"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6833655982594944"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
