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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9856860917940362" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.010450267335802677" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.12449716085079832" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.20389463438490396" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5060286123306896" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.31765292813462187" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6162598492118752"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5045203332463162" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6350661211048785">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15455663398205455">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.0220455530328747">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.48252717857251515">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8640085025940036"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.013920622516379266"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8485212361105947"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4023192805888509"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.015627590835052052"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1110221736990804"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8522554348578255"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2282867413996965"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.45367176294930855"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.11416212628449252"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8254762563305067"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7536702224083227"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5804799232732698"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2585980996255668"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6816179122975012"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4996895285552223"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8981489187433127"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.24716134614399166"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5193555794484208"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
