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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8975720577344843" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.7855727951246887" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.33569878021859667" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.0032449496210478213" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7648946749777283" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.08105550323107047" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.3535553876188122"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3544422485830101" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5495365320535663">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6074285868431595">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.16917159984724806">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.10953207908590779">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5611701872773973"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6332643263727371"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.17551434103337638"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3808038158149627"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.43845966349928345"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14829185079136264"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5514156636221037"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7559289230762065"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.587856275408773"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7826268224219"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7674352649210661"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.18949749911273495"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9509255921510458"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9330650778430245"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.49259071222494155"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7752437995243204"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.16793424755801767"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7276400731883925"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8949450802182715"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
