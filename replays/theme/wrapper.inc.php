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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.786755347239875" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.1614313280813886" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6624394998335577" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.41341840153423903" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4561134225292709" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5729717685469011" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.1912874982624173"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.2546578512544806" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5574147698861607">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.30879455830782976">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.933648727245614">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9603550833839434">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5074815280678178"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4538074732392632"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.163287980503259"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6127924626896313"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.36635445470886374"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8804973515192851"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9564671853922235"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9000574293776098"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.07719338007855514"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.07063328090161014"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9024106146891235"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7837417412998973"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.24507916770147942"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0730930439468449"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.45569447830309673"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7370298927191061"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9808475017147151"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.818895767483206"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.07072880520837765"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
