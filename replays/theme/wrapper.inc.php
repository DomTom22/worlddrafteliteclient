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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.07760494235029403" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8040677338533075" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.19789718680024748" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3224080419007238" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.15672126796360475" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7867123726508816" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.09476267975916053"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.694492385223489" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07161029980719502">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8280511425768153">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.47210773520470184">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7904364324594642">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.152395079619992"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5872173882285219"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1307916120484438"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7727315961265664"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6701581846668689"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08075636390007568"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8135772270139308"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.39958651486407715"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7379385283639164"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.43365582341854214"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.06835815430185521"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9953832033400745"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8690294259400064"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.10529234743030313"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1648943343791951"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8329442618291838"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1063597072921596"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9589829721921421"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5659195774458563"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
