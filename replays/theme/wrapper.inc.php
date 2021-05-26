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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.0022399992240382804" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.23206193101067418" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.44651464079732284" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7566463391214466" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.4934657577810513" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.09084661706890662" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.9513602976768527"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.006419646279297364" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25532623541511534">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4936135106926025">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.6340312498209337">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8512601880337727">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.655676825193477"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9911006109589771"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6206500253182143"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07716434477167322"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.5692787303703977"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17246635926820342"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6616021491429189"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7080110536052722"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.19484784360877105"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.29041776758306503"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5245881071060121"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.3655510626396208"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.1088531911409989"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.582666495524891"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.34740124182169163"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6276429209023755"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5438557208838233"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7356745711334367"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.13145316708319732"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
