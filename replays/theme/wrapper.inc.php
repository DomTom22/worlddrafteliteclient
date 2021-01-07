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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8102514652018926" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9724628800564039" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.5242384307413666" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.046294505298455135" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.07088644792442444" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1197954450445815" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5026462730640759"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.33478519865402934" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.36149746625304857">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3433123076614968">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.20708027408450702">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.23000828549542285">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.37951152714465697"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5681844701518628"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6209000864184133"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9634673563451439"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.08598476570780456"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.535266210153335"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7573752845186958"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.07798413702866891"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.44670648887164255"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7313791339220652"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4039889192413795"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4061906019561381"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9280604035640723"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.843057318466159"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.10343708109030691"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8518437257631035"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6898619462483462"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5518832093815036"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.28670721720714476"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
