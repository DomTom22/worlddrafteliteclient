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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.4647312590127288" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.7203970427461921" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.12698387264609856" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.26667986655342313" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.5098168730115435" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.6666056422413071" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5432436034168859"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6346886771758333" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.694887232291449">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6203329029103684">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.38959184875124464">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.4351114714834239">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18901207891056293"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.2788059824953626"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6976706709947129"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0979958683372264"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.3272807562101745"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4254626213620518"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7470341325352705"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.553460761194033"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6469709384505362"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.3529809054100017"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.2994862438213868"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.1341448075264573"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.6104921040631808"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.7232365641833856"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8728325339595564"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.9482784963141297"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5441467347531517"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.40106905956617367"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9659264211800835"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
