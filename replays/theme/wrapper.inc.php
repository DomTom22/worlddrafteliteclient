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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.047471226132411726" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.7456463370755781" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.41969988947053816" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.22176241005740183" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.18318134421276433" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7572994045909209" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.03219865589377369"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.07678685816129249" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.727419451661738">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9646443572762469">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.9527097638604747">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.9894576037098837">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0307402654857607"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8610110464374747"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.3220985577222608"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8911176222577137"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7738547848098718"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4304628726273556"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7417533499143498"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7879576805984048"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6191731592808751"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6734144665850981"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.8883728764680885"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3727278785731569"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5548954243031541"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.15305208707419538"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9148700549693811"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.0803644478003378"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.430484839049436"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.30943217387594535"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.5040564090221877"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
