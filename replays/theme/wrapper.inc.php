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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.653420065853761" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.35445988367964687" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6063600064980912" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.05757722967709156" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2195547435912799" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3768657850805619" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.11562839422371418"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.07139020396614648" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5110550583557698">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6011989160802338">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.08852339423510114">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8046652389450142">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9290589347971363"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3753006757394832"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6469267794632447"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9744850681035064"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5981574979593056"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1508974167336805"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.10939331515785633"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5045451799119853"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5941007161716139"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.0860648226070555"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.963909563077592"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.17414913157681977"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.22318004232864674"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.29210559997635377"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.055423795167857115"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8381605830049714"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9191320184284126"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.701479739643663"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7874932965516173"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
