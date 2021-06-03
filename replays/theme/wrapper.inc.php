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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.9546114544962081" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.5383770721043097" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.3363329375491326" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.016165001277744784" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6024005152508736" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.37068757458591883" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.9326392608101786"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7250884816661334" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9777425141426945">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22586971242079135">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.9407351255861729">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.07627211255096422">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.810137292471695"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.7272222520712956"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5996843486987569"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18570018380302833"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.13027591600164978"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4470873459496876"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.37788405435407113"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.820791453512757"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.5195420047431079"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.4868935550238267"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6437972026945025"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.9884847576755698"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5724075787217353"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.4682164305579877"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.05835186487106192"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6349334547556875"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8127509934911255"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7291702964290865"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8835386673840093"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
