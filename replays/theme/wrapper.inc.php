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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3630016179994986" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.5265449690873631" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.38757607020358176" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7032504463491278" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.0602212959690136" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.41449592332113383" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.35581794305493575"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8785729193491172" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9492453676596606">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8221057362936042">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.7772340660683619">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.028147110587995128">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9670427098682621"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.07128499569712599"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9718294280574273"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7360376522900087"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7372826301062296"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7132271184899994"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.07712281941865884"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.4718679030854136"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.18631723744384932"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3806072725300915"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.4174897839506986"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5361449135510339"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.41864043872217604"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5165592908479506"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8391659528767548"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6585857842430018"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.001154958272369111"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.10074266097343809"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8106478257239256"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
