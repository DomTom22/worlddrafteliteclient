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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6112663378943306" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.6864136156822593" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.21403599019725905" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.8107147621787008" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.21874091715843957" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5611866078651808" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.6398625502349609"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.9222933950306444" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05625096042640276">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5632328327290768">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.2738150173363667">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.10063526775760878">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07288113862886791"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9571130268417625"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6769863715808533"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10700968056234128"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.05998560480914561"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3114475437992563"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6864122074778469"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.9737228272827383"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.4901684725315858"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.17809041294344174"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.4598034794207506"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.531654693288734"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.027018425647788336"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.026719752770903105"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.5779785606060972"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.13268657999022015"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.17652125619132497"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7728224736937908"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.691711348460134"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
