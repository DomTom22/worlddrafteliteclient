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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.40427268747526446" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.0608313103408038" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.36060061526342313" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.36967182782256836" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9483448193427291" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.941000027817376" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.4844864002163016"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8575784374991748" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0000153368098161355">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3850624231133488">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6703448039660669">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5692241604848289">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1602467387691049"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1279482359462487"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9696735078329659"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.26623315962573924"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.43702075815888985"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2732964075141362"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2636840835158316"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.282856500764465"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9173133230006727"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7072363010108949"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.977796154810771"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6116299423416174"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.57909368862663"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.026035553788433363"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9054408619987153"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5552443784048551"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.579311012121331"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.773045167122316"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7964659455736407"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
