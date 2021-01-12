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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8330169935978871" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.988636479844268" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.25080876442877575" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7794944619216393" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.42555998791213834" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4123222543570009" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.13609172760771115"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8373597399441572" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4411380907509541">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5569740720799325">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.20900306663487678">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.4133134870104973">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13398402836759926"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8895393201288737"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6802609487529856"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8161389368816594"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9587140733594426"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22537351967586194"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.40071912588925396"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9416387892133693"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3164418668468758"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.03755422381823026"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9268401515914488"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.29031201383954786"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9202791808706876"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2182864649935694"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.07617864756123605"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.621097532744471"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.09151871312825022"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5222637717937062"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.26088366661836737"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
