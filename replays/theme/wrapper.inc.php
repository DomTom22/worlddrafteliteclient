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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.40992585584589647" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.26703404852776447" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9456113422042072" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.8148648025624219" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.12243178387653919" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.46004315932860695" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.16285494115842059"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.3290070333976005" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8142147874337773">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1691268305331164">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.6883833757640119">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8482314657157903">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6286180959750653"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8545994325824366"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9240923629758331"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8411538456631911"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.21613324273509082"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1646775948636776"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9771418456679508"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.59015873405125"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.4064797187428151"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.43404287846120004"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.358233494988454"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.7276189992798603"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.6779125092940739"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.3002675003677877"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.5622401753124697"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.8964820086531915"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9491607660550501"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8875650114870652"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.04011262746573285"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
