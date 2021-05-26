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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.20464548441894936" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.7989695930069762" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5060659020220208" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.15371840185069585" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.276580318856265" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5959031549769678" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.16988932585331074"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6980367904799742" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.284622766576053">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23108634412260898">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.3517288165161254">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.23256389548602296">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6119836555616147"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.6523935795424689"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.05325725211133947"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7831815941604245"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8987629580258569"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5054204086935585"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7359820432594488"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7063663647824776"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.27058152015146875"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.6930500571533842"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.721812999297361"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.9645538326876497"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.3674428538449235"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.9009251959489515"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.4370456744542355"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.812650602908741"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6380967035401488"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6407584954778729"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.13999177725863166"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
