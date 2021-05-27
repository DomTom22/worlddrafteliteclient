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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.29726457622368163" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.8574618721967127" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.7386087377347694" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.38288867686631667" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.10667070949991064" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.7597857396091734" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.8615405584024822"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.3051242009099504" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.81551626433173">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6442172798307484">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.2334195747673129">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6837115512134422">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03261823794897745"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.6702772438457807"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.40281412229594604"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46678158452960417"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.06872058006326265"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.044534495827952325"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.34075084970810976"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8122941943279567"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.06515282783293919"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.9666031786118323"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5922768638730704"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.903178635916887"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.3068791917291518"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.7743605894597705"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.18228169069626787"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.2074218828048544"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.571073953765223"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.4000391667957117"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.11794995256171203"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
