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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.60661631997129" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.373197755490013" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.04242870869017912" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9845182492212048" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.1370901864972054" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.711931873724905" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.06223352007463334"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4734486046292168" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.897628733465587">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.43260633306287133">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.15638680918530756">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.17965595949945">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9209943926895414"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.23974466109237258"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5523196887172037"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8669794117034941"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6274576113640502"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2192722882343161"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3978468167373481"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.431086921891477"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2327846512584708"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3516777827386828"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.6070104813942501"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5324476105972444"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9237011668098003"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.12249463581643538"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.17938576580515875"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5683499145244422"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.15054531120612769"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.16602082432165388"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8591358475280348"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
