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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9248111447624692" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2641047887801551" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9337659181750018" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5962896590084592" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.03191131331247643" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8451283317248954" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4836210812208974"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.15703219718091788" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22484331319476336">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6221509645571788">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7258488084689012">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.04400183905059474">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9394842693888965"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3781783110781034"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2942193574344585"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6151154893334352"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.493644077547051"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05938648250004808"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5641453121923943"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.875020920926896"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4464844475268932"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6832310243733255"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6308520426302875"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4843853058247696"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4647097194255274"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9201799488645794"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9321563782984652"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.19030501950865575"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6426621054196706"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2696496030364346"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8903465282345557"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
