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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8224085294294947" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3915939192326361" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9670629804732693" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.645662214091038" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6609001140677175" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.85679934508076" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.28627636804388"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3462300052571359" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7901763746687656">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6180568993200628">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9054498317339097">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3333394735363262">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.338303672159751"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.49078899548286326"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8922952186879425"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24374755084748"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4381619291966994"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.755493588348118"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5489950467777946"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1725702741228008"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1453889038512408"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8287917213712102"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8428704919454066"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.12471546046565174"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5086101638719707"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7204637702834742"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8348133489241152"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7285874892304556"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.45281495007202444"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7000042769869153"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.504768521467142"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
