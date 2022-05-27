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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.05160434246126" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5508459668624215" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9607252430934787" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.18402544777630503" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.05222998172530824" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8422604752064144" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.7950896105212677"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.294578235359803" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5040926942310542">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6983543004071129">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5107669462648115">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5162444953717145">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5277996668390041"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6280986834288638"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.372755822132699"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6680931247240582"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.49392408602124727"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6623137579097707"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8950497148857319"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.150370051535206"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8580823060846479"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9363572683078878"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.27922611841690603"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7928474406764425"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2526651384209748"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.06790227964833173"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.04776839816991396"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.8012655751212243"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.6718861372899836"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.09803443776035548"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.3108071063345883"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
