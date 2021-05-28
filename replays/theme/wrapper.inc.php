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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.27376713916520545" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.12140037180219942" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6042960601381193" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.5453062123821095" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.09848714252513857" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.7682372732165272" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.7576565874785535"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.2394235395261466" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20366213126608224">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4719986253131603">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.25629795222503327">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.09483720411483909">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8875560438847128"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.29786857552426116"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7645249873175815"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9345714304192876"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8675864874054022"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9567974534193282"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.47884050779947174"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.02249700373793262"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.2552765896814888"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.3564967065338964"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9049020995102284"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8717291819867603"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.6382302771910309"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.320668718948224"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7714332584446997"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.1653982089996815"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.15587994866091814"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.2614452016389537"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.21594993130180185"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
