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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.9512754601532478" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.2065788320820885" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9143353912314862" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7306789634714226" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.920444217856522" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.8866617317900611" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.30758980283332016"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.4222116173844934" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8667963739980544">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9237130123810717">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.2887970769964685">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.737848174505662">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6360987833943508"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8771103614681288"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.4786649014949531"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08246500004251467"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.19286970737898979"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.39992657403127674"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5292579905420076"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.9943579582371433"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.8283909176863915"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8896500809921515"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.8853746454524631"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.24118772002390743"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.459479053842351"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.32716990815126956"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.3384689617759493"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.7482113516567424"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.35272189387738906"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.13423809763505834"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.01556688356977598"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
