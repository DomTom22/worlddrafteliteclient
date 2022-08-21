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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.66261706558796" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.2922503509666976" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.0027496683286225565" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.20559281053516032" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.35480504424972903" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.21526400439057425" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.04618029581118521"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.35632174089194857" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7301424639575465">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09657001187909597">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.17045540080462795">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.19736230448409753">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7663884000333652"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.05246376798169994"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.08153270069206076"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4561696562279016"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.781408388201343"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6927501026469098"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5114871243178969"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7867850040827868"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.21840053631479606"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.043565745299514846"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.8895256367867062"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.8274956025531446"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.12267222210057271"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7664512435584525"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.4730474512482101"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6075620831232666"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7409313168560547"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4279926175738875"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.3255512134246257"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
