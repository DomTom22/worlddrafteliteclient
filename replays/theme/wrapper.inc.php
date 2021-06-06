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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7626744966544083" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.2858589075256075" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.05648750271413716" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.2693808095900465" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9549029762701133" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.18174214568783653" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.8153911877001656"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.9854453813705106" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6829020391048837">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.32111048727694236">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.29949196442083803">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.5204857120430619">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2679291428110675"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8780336535696496"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5274714396107145"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.931929056235012"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.4824408377093299"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.21877606821754347"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9704001824949255"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7201054655982149"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.14877777087279376"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.33876631081458086"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7884190946256411"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.9317234092915605"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.2755022504570288"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.014417728268266039"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.9732360523529198"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.3741979176957959"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5364052279603089"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6211842641336098"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8678109387344954"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
