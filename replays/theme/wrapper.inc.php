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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.824735827215828" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8317004734649305" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.42344730145981924" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.051431621264069305" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8406650677651899" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.22977028824443102" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.12295734259121849"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.04578151463713209" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.28994946133819166">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9839648876355316">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8318762058237454">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.4420869789251094">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2771583661283419"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5701298295377468"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.7731918184587345"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3742089326695126"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.17823001347273038"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8289975702451005"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5611767127128231"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9339459783065047"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.498157873388023"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.12442059036786257"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.25232757663976657"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9157514223698904"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.25555478576729995"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.20756609650924007"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.1481080435429929"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.008956202545233882"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7782218310040077"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8821321896402248"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.5874842035403818"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
