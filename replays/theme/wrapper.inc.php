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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.4292658166648633" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.4545176259672725" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.21866931685806645" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.25928557000834385" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.8801811434269358" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.42353198648152857" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.7539868709756423"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.4504521927908358" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9236995420111971">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7398125092792249">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.21152834929916198">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.4235603693756851">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6807391587864076"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.48016330262364026"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.779273876834885"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3912159026138091"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.4248990787286411"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9004954017697144"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6615760489907749"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.3028976928058167"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.34665557575068284"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8190464696850943"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7875199618461066"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.4222586695955768"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.2513018724690672"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.34529143020591824"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.23374332669257147"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.1561740954796984"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.36296346819789216"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.42722321595391377"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.3872236397958402"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
