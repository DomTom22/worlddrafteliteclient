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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5629239153407548" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.7452972726274179" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.2710046077565724" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.12533436517486463" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8299574484358536" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6156906382827998" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.2613573125809512"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15608119615574334" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7827412697901523">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8115425260409883">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8138005547039264">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.6354098009146825">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5563976748656392"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.2543014799081509"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.08566270513335317"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6581717713447752"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8644090149786792"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7969742683683512"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.23911859675991898"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.3622060630178856"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7400215701151496"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.38180893681021044"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.2663377043262325"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3782245243270266"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5981681038911022"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.49812597337502584"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5736737793642974"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6621755682231756"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.3707185265364725"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4636610158799561"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.10980048231229178"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
