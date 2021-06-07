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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.16030035696443612" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.6024111463245474" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.19100767553633258" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.740069877194526" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7161683117852939" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5551673789677836" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.2918644491546807"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5372952582049435" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5958025882672149">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9611266735133146">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.1085123369950971">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.3108423512171079">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5241369989122844"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.2010267948654978"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9639553146520714"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46308335068074014"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.2173812053796147"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7238533461435948"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.08995182529800827"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.5552020223850151"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.1567996372521394"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.13231712945417318"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.09135223859872088"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.24599051860504395"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.05667580994800847"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6146118255207484"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.20195813495720638"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.7195339309246498"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.7787760854070889"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9625135106212506"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.27465205986862706"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
