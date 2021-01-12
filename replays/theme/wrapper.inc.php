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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.06155245954763755" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.4300916951604401" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.23935298464056043" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.04743640100175295" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9625730249276871" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6779301575212209" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5681457270805581"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5492052661238773" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.503215028547779">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42720346203571036">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.4365900169571839">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9814509124720798">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8332058497629762"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.46735731961970073"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.989489242273037"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8658228327063135"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2854549186199087"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6498610018316122"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6292678482588885"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8980340821134738"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5527993186667468"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7956205177109936"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5268442337235828"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1881032573676622"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2160977728976763"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8485399327697531"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3671656491153559"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7326764163291615"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.047003616764654144"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.49732551387593515"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8710789297036474"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
