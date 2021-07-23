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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.37933048978422046" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.7898475749912657" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5558592255185972" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4361138548023529" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.4039321572082313" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8933224587198294" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.9232711119182244"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9619534009419701" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9962993734890933">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.613694975307137">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.6446752283358865">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7355296035998828">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3343429923211869"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5645595161961949"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.35681696156326814"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6265472675361314"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6193978067851345"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13527788050886236"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.38917492310043644"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.3737876558184974"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7420384296681177"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7633911525688037"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.13447384395020734"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.8643746656719176"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9821552058086909"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.07766201616429091"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.353756153025822"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.31417180272523804"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.10415161414852081"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.07415894801681411"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.14875247248183765"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
