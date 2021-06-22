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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.4097523740944615" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.21543253812334884" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.7956495976186553" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.022243735017771105" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7407342734492715" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5203554915048676" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.8568864929442497"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.4245964525482069" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.049237934618213464">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12545397887414467">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.015767593195661123">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.7425949098801106">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7590196693139055"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.1758474490230204"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.017477383463018414"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.32642215254100804"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6660469758410643"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.40568692925636585"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9488281308423725"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.333600729871125"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.37726244660129016"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.029452466625503826"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.40501058133760903"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5126259192469977"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2755770246038829"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.19845139583517568"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.10552292282628417"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7790422358691702"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.002057297581804951"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.3980310717827451"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.008436131893877485"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
