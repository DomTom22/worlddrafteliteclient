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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.865065439853538" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.26149794139577676" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9770327087534683" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5990148939709008" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7973936420859666" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8796473388943935" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.9756748475277359"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.218001387656378" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7484199337545057">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6391018832999358">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.0020893945124713653">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.04163559234473757">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21429517724804725"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5149576364218573"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16635532659409047"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9324798919066408"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.0038169347008367716"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5193795462753097"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8691167060497362"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8786525402230323"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.33468990551604616"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1071087932982826"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.32355715151383047"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.456607966384992"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8493129011992886"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.49168536827996556"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9544033188723426"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.43481563351183317"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.34233782283430547"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6431799662897006"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.05398476069520752"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
