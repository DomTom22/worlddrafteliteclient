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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.4320191765651693" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6355467605091589" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.6152985476358936" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.19009006750755653" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7551829128032563" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.3187948020184115" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.3411609863855487"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6176014658157707" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26186734916094534">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07361564775518392">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.07818380269275527">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.9212833554531246">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2786019707726406"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.27116178436291105"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9953341469928909"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3837489902979203"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.10581499705875164"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17498342221441376"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6067090837974909"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7939183100327147"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.46593083774568744"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3544103981766493"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5439391912697298"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7778750763527589"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.008757746837771307"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9401843797835334"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.47427052817451854"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.655124209094281"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.3727788337017943"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.47959560254625533"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.07221307970067858"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
