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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.20497555057058903" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.017586088367985475" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.17693687868159302" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.264750887664573" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.33513977903662195" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.30943683964554936" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5426630452693824"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.050689433303310105" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8062659839438109">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9341665719318977">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.0568477137994281">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8429521575524086">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.01637194932615027"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.48237403134397616"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.3399937340396164"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1060921211569994"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8237262512531136"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19018578216312965"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.054559938421165244"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7775729868021377"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.31166321281110076"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.0746078024951069"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.28608311243583606"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7992733226724424"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6742445422471213"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7998457759475033"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6490386456692832"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.49889219800121243"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.677787238766723"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.12593018358265384"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.5096736027739848"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
