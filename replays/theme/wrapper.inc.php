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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.3587867013953028" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.5907047260980993" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.30592543011944695" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.22234784137055397" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.8759573206851792" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.8013519150854234" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5502147235694321"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7921220712434733" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12861995724827313">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9344790005703685">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.26882309235003277">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8719070501948214">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.026484681822957157"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5904503235748542"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.23972948489030554"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42724404071965316"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8540787150377287"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23895949630072444"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5256377910715531"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.13711304620263642"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6781823672734728"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.48745095091972"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.3285246516144318"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8511750629207557"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.629910251469713"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.7788453995108477"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.3034663403167195"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.9534693355003911"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5524806030269511"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6726525823087828"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.7661186333241583"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
