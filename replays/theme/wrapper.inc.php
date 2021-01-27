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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7308550504638378" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.12115083986352415" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1659812398265914" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6736233947095607" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3459772908220111" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.12299059872628404" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8331182685990848"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.390471895135992" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6725561742754635">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24899851549600704">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.051874353937955364">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7463532154959489">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6296638340706764"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0024665736146844974"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.29769920448293186"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9003325304578518"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7540076278615064"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.45021251786174776"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8257759069707724"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.44567642462906965"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6402965796223707"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.20325111130211382"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.32488259896117966"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9635359726557544"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.43383870020913484"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.960731079933699"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5966005336247804"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8621755475161821"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.24520307536451202"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9238019054975035"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9447536633249582"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
