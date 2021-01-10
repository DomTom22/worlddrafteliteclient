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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7063936981424679" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.48541466559761526" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9974140188514238" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.23954114236485724" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5464191780890142" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.005873288580943159" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.31486461822438705"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.12432483527293559" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7022747977195496">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0884080802683811">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.16322142473857415">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.07872166265961411">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6979251575046179"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8953751641006322"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3439910484368087"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3452920789674454"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.06119704980005669"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7185733170405508"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3008555124296648"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.35588677316933115"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5601717948317777"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5343497231210734"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6604146578986496"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7879398951439991"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6951190015932076"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.07442670095884307"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6852772299043015"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.24436575310650577"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7055646355715883"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9423268414924635"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6167492681430806"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
