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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.42699691597794365" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.28537629882503945" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.28474085621761236" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.37572829507751626" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9272426094770332" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.13486918060323605" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3924009407292628"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6405663364833929" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.32909161770565953">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.674056572515821">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.22310599762684813">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.3733941065239206">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.43992496565152384"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.47290436462293806"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.859648446376482"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.399358005840726"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7109383401364882"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.837301018832318"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.36349156374611225"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4196716399079039"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.971805549536761"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1770244533956229"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3679948503518431"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.025842006304153564"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9856558614312751"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1984828449819631"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9475927632468304"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.26683396291252093"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.05185660515492052"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.47375585895763517"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8628815007025306"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
