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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.11893259167663772" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.5277803745650629" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.08177203568913471" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.5735467677589108" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.8340863379309589" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9449211017693124" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.9812224951192581"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.3411573607030449" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5331344772651321">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6574146111409764">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.7703420990199088">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8526575226542601">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.010314478453601783"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.7843924836081797"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6962073409609666"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.478552818511357"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.946239617894113"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7752076754312933"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9084646538139598"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.3425410358867296"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.7475752831680949"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.7453644676163271"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.4743080701981388"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8864026243525118"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.00011534779476418677"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.7303896360506792"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.3683472744615066"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.0067183845947693666"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.7942462659700369"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.07833848842422309"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.17796599251055656"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
