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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.19977944902682587" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.07733794684625628" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.07443239721537198" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7540408083200059" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.975771447546439" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.25403457591265144" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.41188774337460243"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.7955112326300955" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6210186761684557">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.635009284979495">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.9152426525136701">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.2770588464042021">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20540578300492562"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.18117908951868333"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.42472522999467843"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4043131048569777"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.3934851211973862"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9753932927437665"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.1849212284989714"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8091629863493341"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5959227648520884"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5020810175399262"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7126903154218533"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.007131602225440625"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.4449979990213777"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7376965046307082"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6614096632120863"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.36297145922470375"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.055080650200006964"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6336437392822203"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.3615059781082819"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
