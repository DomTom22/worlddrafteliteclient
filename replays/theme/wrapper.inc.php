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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6890014273341267" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.08924294576627578" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.343696587382349" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.533310626466039" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.5977571338835856" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.872322178826141" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.40627219450705576"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6673741478164621" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9919562633890944">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4541430638260213">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5958029111874257">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.9464788579065562">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.47772277171092536"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.7673653720161198"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6003843730078546"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4219678872159167"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.535128770997432"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48360879682445534"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8110599799877194"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6433245022141802"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.7216248305869069"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.993158684205173"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.14979438523560762"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6641748484116323"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.313974483053866"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5670340560875833"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.16653882522163754"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.7682496901383202"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.24766383385731472"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9887695344707106"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.4749552886063366"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
