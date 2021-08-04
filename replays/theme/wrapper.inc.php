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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7438162017337651" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.7087003014067126" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.2875845742400869" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.40029711767402754" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.35216670751370804" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.08950807652645443" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.09033803452230704"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9324786586158769" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42644674551671846">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23601421712074244">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.6906547404622019">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.8868264479726384">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2783920860623319"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.19010121604072983"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.4096561815564197"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07519296337471548"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.39197207974319337"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.44030774006325424"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7096925532935721"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.767433047935753"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5563141106153351"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.45244815657388404"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9138748740278357"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6595252989627274"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8723005794056873"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.4940851972893703"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.03710230081299648"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7233644491889588"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8305484525906905"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.14978543478510997"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.012856238311476975"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
