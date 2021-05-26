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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.3144363582833736" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.900972264021956" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6009198646302276" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.504310368752559" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.24823536317091777" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.3717727520161218" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.44088590913079817"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.8053055861256535" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6682509285879412">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.44170166000834454">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5153153361370333">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8177449869384468">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5864243230967507"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.15524272665337358"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9576965889606945"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9706105193761332"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.5373862407874928"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5325643987122282"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8881690365288788"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.5760271514293327"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.21399990044485073"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8284875683778046"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.21124408617304336"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.5045929416931223"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.7212015463044763"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.583678087638613"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.15959453818574"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.23654931841699423"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.30858401705718275"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9763938838257895"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.7197473120371001"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
