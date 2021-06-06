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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.824663511954496" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.9643036717704785" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6710984176256067" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.6751627855825904" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7748790687257301" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.7688827134484504" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.23075201809405033"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.007238506393955069" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25805264375105774">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.610085949293387">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.040396908513172125">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.37409732199279744">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.37452137956856957"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5556538766743457"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.780369292060356"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1405635373716987"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7333155123184434"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7025335038053426"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.14738037336986065"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.27657113256022514"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6017175882552523"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.023837429873649008"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.23953755258485665"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.11126377023848777"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5081463620234448"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5834620051093824"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.4891307849893707"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.29695053605052824"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5473700450151455"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.2510102393113627"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.48100396583539284"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
