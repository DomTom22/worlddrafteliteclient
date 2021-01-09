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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10189176492588037" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5293022939747021" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7466213864810554" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5774036252158474" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.12687302219452556" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7977569697321514" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3281274699899335"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.962191752353841" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6278024925375172">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7248896283416453">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.9400162592084818">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.2692619626628008">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4617545318313636"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4895044935617707"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.18872847929951853"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6453897842307987"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9267868363120739"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4916813623409928"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.542162549835332"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5178657116036693"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.34347657566810175"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6266120016025603"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5451117139523038"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.16817510170272798"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6530574595951799"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5892746574130712"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9772543664316617"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7299696012207468"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.974867668648266"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4815334342606774"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.11315341207038387"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
