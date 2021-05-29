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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.23877372067770097" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.3696126711077701" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9276822278080559" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.3202518085566235" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.8355640663781425" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.8533871613550841" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.4797534296540922"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.2809125070038747" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5636677357622868">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8600859695790564">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.838844967476138">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.9483103716418217">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2933542055028233"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8916430909299706"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.2587239655551212"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1542846565251017"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7151673819490711"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06499737537869321"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8177688675632564"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.13508628468756623"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6275655419523529"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.07347304418045608"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.4537434309311068"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6774698251560687"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.7623721484206998"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.28392543220817124"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.18298025677002894"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.8409888377421262"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5904583254395706"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.21941095231202712"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.5691035085829259"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
