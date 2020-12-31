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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6570227570128373" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.627327435605419" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6231535185012973" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.29837029590200004" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9157732993325307" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5474847751725487" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.7048015381333566"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5047255426170845" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3129208559473722">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.40018590882545135">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.3873607317273704">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.7284667189893386">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9452856968428804"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.004148875620034076"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9978150201521787"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8953735955444964"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.17052938876468682"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7900996230664183"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.28143795295916596"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1372191465618695"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5032882597221284"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6198870228964721"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4388956344863315"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.18251547232419996"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.805270977675157"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3639321018522397"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.16235324484870772"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7005364633864548"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.08161718316330724"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5920801386824135"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.41996501803236574"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
