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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.8307749472364245" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.9400285137607616" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.563221061673719" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.8777847887181833" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.003401212523605812" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.196142533034521" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.6821053756701687"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.49909149269691344" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14781104985122528">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4338196763354123">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.2341614296494332">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.5755867695648038">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4097381533636806"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.10161279223035558"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.8013599811857139"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2064510453477968"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.39900918297848476"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7964709518003208"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5964335451999054"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6717133488256561"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.04785755234982769"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.6914343939652701"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6289197338064758"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.770208934870166"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.14654174525545605"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8223170275678418"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8149360602824423"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.8064163683115206"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.14499452521108136"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.04499767763550411"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6449083739463213"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
