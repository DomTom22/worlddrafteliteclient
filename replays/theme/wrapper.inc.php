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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.942429414755185" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.5639817925491082" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.007342145201718164" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.44747351252209167" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.261527561407908" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.524698699905179" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.861924897891422"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.45127155326757595" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5259984925034311">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.17610893780577186">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.3640109256906203">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.754028879663744">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6953972792873127"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6943385316073223"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6844926686013457"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21890129472586572"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.2548179431050184"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32141997454707805"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5386838440682409"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5172943322735375"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6505549750300632"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3482473472850973"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.02912223005941117"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6254388086069853"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.45989940447162914"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9068136501658508"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.008584573715439081"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.8499469996899915"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.09074900142064113"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5318478674348208"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6804087391127982"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
