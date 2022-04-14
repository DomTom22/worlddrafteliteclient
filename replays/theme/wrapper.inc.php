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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.10481735450438667" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6012138402419016" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.3616167156410559" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.19255852149250452" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.24704639003756812" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.530489270451308" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.2915204699693421"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3147075911983521" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8959454295347211">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.558016446925538">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8564456332364261">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.785766197714088">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9204764337112199"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5154690302269453"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.2684960574507391"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7800496821161762"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8448367543933795"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6028636124158626"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5112106505783847"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.08020568453439791"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.014816949896496068"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.08374500377076233"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.36494663908971514"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.21980946527081646"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.12027960824136197"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.12158932987883819"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7704307757379494"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.20480000156226974"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8514789532305871"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9016275458382479"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.36437587552829"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
