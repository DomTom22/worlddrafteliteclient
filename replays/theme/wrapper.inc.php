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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.9993158017311972" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.7198016921904629" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.8741971963836879" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.42321539476759984" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.500488543760913" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9057151133517356" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.11982017444152326"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5473301957496424" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9139314271860539">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4861903309874185">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.9123998266055855">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.4306488017814867">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7903144722799336"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.12002226469739763"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7921695849509094"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8903740903433797"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7741312901658626"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8411114153313441"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6094755593093997"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.329882397852183"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.579903526234046"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.07090614090183323"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5182999386404687"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.003093431826257431"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.15498896119410932"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5052276431550424"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.20500666764701547"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.9989728082750586"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6204438605690452"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.3906897331722279"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9365331032632438"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
