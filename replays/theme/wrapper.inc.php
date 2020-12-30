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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.14417781973139965" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5991586939130107" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6774649698721082" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9210296719187268" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8140568243123159" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5267080950885943" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5063254643154131"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.2693671303529883" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9933511294213273">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.01587638196605856">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.4479339760574361">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.3986424285519734">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11537075470250646"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.39034606162769414"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2174988136602536"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.84691030371425"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7470962182284826"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7526613060053158"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.11417095495138274"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7320183994921161"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3384216953952468"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.16504308931955558"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7178739063167932"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6693175094532975"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8222473631034433"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6985335107701953"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.30216052288516093"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7214209172635049"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.13581071383926013"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.44985758199419323"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1675849533845648"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
