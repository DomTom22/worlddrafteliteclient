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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1953030632640198" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8960763331240884" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.839102984561108" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9682980497751597" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6054527442101283" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5481848573716914" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.12301063995721373"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8054565624813177" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5317417799662147">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2372205828578715">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.3755801714652993">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9976357985166848">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24213369318610622"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.895628709285994"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9806265997206165"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09976470832695195"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.31133206803396485"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8621358324555735"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3947695447283057"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4315340331562365"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4149609065143176"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.21409215896960054"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8545412450171728"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.377732700084211"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.24743634702372375"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5907846432408836"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.19742174207973817"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6623847541155528"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5623234607848291"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.10228612846024521"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7429963554864891"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
