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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.920630708875348" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.25564514814888306" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9968035621301417" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.5169284613989622" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.3137623272658563" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.34409779872196933" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.31830851418066985"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.19832768835476222" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7171835695050299">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15157862173751435">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.7752141166141291">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.21631382026238666">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9260302912518037"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8756107363595822"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6345799785549935"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2633997207555592"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.19438777159469378"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3153394619428178"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.433660037111816"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.006348042804062537"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6078096578075989"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.2842247276490826"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9420318763931426"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.40093468096171536"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.7306009738281778"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.11901471198664093"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.29811023603489195"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.4781955668229543"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9926906563834383"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6448040163856887"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.2569557553923567"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
