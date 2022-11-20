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
	<link rel="stylesheet" href="//prismaticshowdown.herokuapp.com/style/font-awesome.css?0.33442155876290025" />
	<link rel="stylesheet" href="//159.223.130.100/theme/panels.css?0.16351037550413583" />
	<link rel="stylesheet" href="//159.223.130.100/theme/main.css?0.3710805339367922" />
	<link rel="stylesheet" href="//prismaticshowdown.herokuapp.com/style/battle.css?0.9646553405753915" />
	<link rel="stylesheet" href="//prismaticshowdown.herokuapp.com/style/replay.css?0.8000525705809856" />
	<link rel="stylesheet" href="//prismaticshowdown.herokuapp.com/style/utilichart.css?0.4553332695272476" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//159.223.130.100/?0.8400881808790834"><img src="//159.223.130.100/images/pokemonshowdownbeta.png?0.6041814355036177" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.04453185520458791">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39388930289800284">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//159.223.130.100/ladder/?0.6023937414971903">Ladder</a></li>
				<li><a class="button nav-last" href="//159.223.130.100/forums/?0.36635716406907237">Forum</a></li>
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
	<script src="//prismaticshowdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13292704800561617"></script>
	<script src="//prismaticshowdown.herokuapp.com/js/lib/lodash.core.js?0.8573295645034602"></script>
	<script src="//prismaticshowdown.herokuapp.com/js/lib/backbone.js?0.946104293365196"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37283306859171117"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//prismaticshowdown.herokuapp.com/js/lib/jquery-cookie.js?0.3614687853468699"></script>
	<script src="//prismaticshowdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8499042812829409"></script>
	<script src="//prismaticshowdown.herokuapp.com/js/battle-sound.js?0.19324251468504983"></script>
	<script src="//prismaticshowdown.herokuapp.com/config/config.js?0.09544347995969282"></script>
	<script src="//prismaticshowdown.herokuapp.com/js/battledata.js?0.3918016317104829"></script>
	<script src="//prismaticshowdown.herokuapp.com/data/pokedex-mini.js?0.5360952565066597"></script>
	<script src="//prismaticshowdown.herokuapp.com/data/pokedex-mini-bw.js?0.8262689406815267"></script>
	<script src="//prismaticshowdown.herokuapp.com/data/graphics.js?0.7366697667996163"></script>
	<script src="//prismaticshowdown.herokuapp.com/data/pokedex.js?0.8457435032226888"></script>
	<script src="//prismaticshowdown.herokuapp.com/data/items.js?0.7361975723825165"></script>
	<script src="//prismaticshowdown.herokuapp.com/data/moves.js?0.31369414400913964"></script>
	<script src="//prismaticshowdown.herokuapp.com/data/abilities.js?0.8916907350005499"></script>
	<script src="//prismaticshowdown.herokuapp.com/data/teambuilder-tables.js?0.16062660379443705"></script>
	<script src="//prismaticshowdown.herokuapp.com/js/battle-tooltips.js?0.7634826964512595"></script>
	<script src="//prismaticshowdown.herokuapp.com/js/battle.js?0.169923991861876"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
