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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.34491051816783136" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.26358016444473" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.5620163180095952" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5473842922232748" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7697849007412563" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.44402911914630616" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6012801143049264"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.820074704342036" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.37136281609959254">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3110716050794957">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.29452912315454194">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.7703798720390207">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19786581255685087"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.16100154754501617"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9642836960473946"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07182905709329779"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5142195704897774"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8246504379722315"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.10310724883080047"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.766370779503537"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5359040905690422"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4661313567005889"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.15858040330504042"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3881520314918865"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.40467407385183973"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9199374836249596"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9574459162592408"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.031006944093323385"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.04812312066960289"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.13576282997478217"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.09095933747012874"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
