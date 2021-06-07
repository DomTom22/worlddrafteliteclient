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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.2867560526740114" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.24605641016248225" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.7094633290727042" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7512218110254665" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.49954295632283996" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.1674222449918148" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.79455657225849"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7567600161116184" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7644570811543878">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4291502758073322">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.7858300689908948">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.16154641549595716">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8151618469731936"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9364917382062685"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9277045514564459"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42476849932840843"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.21951982096943068"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19821267118442987"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.19749310240614548"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.07621241533036405"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.47612659304148774"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.1867655840145317"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.37902035898128816"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.2221569372773433"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.07000378156195763"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6121868740534746"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.29612860391501505"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.4730611659718993"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6755808136210291"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9157544670285684"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6742406981194753"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
