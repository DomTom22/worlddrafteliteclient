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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5162080781155418" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7301959822948731" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6694248419214242" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9602749219155386" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8051390129081051" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5196005994468056" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3346252584364733"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.787056458099721" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7085123256398873">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6655489013006666">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.9859824047473578">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6082118515547619">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6037567841511617"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8048245679618962"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9188133178691189"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.01969505856149567"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6160052360775605"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36504039438157543"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.49092349290097825"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.30964737367227957"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7730954843603481"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5093411248107191"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.15345005726903227"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2184308258727683"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.25741771667842595"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.20246854696952776"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3248325740475584"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2564269459576485"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6247087183326718"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3708584908038215"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1062569442142034"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
