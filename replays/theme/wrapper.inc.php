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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.614668876794624" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.20932734517645057" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.07898005701434485" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.36200171569776707" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3136736270260194" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3353096662141446" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.04745185829230736"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8101764426473994" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.032874559591400176">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9422538533001537">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6645496279278105">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9361214286435178">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4000142979734804"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.44927596801615355"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.32747116996646897"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9713003451209565"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.05556424208616262"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.02784168056413927"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3081877566814104"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.035905033795551544"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5380521781800984"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2092144140106602"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5684591744576346"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8806052531118922"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5270001841719352"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3815362482169784"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6437123136402139"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5263924913738447"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6225444960091291"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4281299654528252"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7837355408780879"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
