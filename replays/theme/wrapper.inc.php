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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.684911543486074" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.3072275553746293" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6640987749892386" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5148529295857085" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6193333525510805" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.084928755175818" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5407844787730118"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8313012472887724" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7654900091437951">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35640338626811685">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.49841367049181495">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.042346618346309484">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03684812604099208"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7151041872144366"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.40422151657663496"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21139155629446704"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.16717105902601892"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9966277945578141"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9866043522401331"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.30035809396327484"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6483478646480789"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.544724867877497"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.734310219738977"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.30690294415762387"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6629094317884621"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.016380654219860125"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3688344899243414"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4392475086074319"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9582837649130274"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6700502851321848"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.18452685415006642"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
