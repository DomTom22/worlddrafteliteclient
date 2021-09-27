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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.31071526146419015" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5821395374668314" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.2949128830570482" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.19140838806968263" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.202444587681607" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6484765581877054" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5287151422968266"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9053909511363571" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7645017668401166">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4048987942927642">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.11186465280919311">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8642428695373157">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7154896812100457"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.1286499849417173"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.2971669267099779"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13521281554390763"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8225030582431649"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6697733827840964"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6050197943612037"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.622957430283213"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.040842182898020996"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9982768793158319"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.4757406172319141"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9815174923310794"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5895848369142462"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9574654813476475"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.1543171724517287"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6238472821009706"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.009046402944714371"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.830545817258564"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.051712615391984684"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
