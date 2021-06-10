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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.06987132848684352" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.08947212160334117" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9430557444732781" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.11155628926142191" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.8488376385938672" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5213898721744086" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.11711135590950272"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7693298293457713" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8195244114721774">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8059789964067909">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5442192055216242">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.9364620050156092">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6512225579294699"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5972157502228146"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9547778117592622"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2532394138889491"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.9924592127382046"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05542012348791259"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.22829601648878706"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7628283458929359"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.5882440133399884"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.866441909253971"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6335974826567927"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8422975132064199"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5863304005656269"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6414550419707838"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6456421126623446"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.29852811110867283"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8135543136776793"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6504378591964206"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.060091313738892316"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
