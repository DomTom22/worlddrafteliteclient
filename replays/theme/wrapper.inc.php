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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3120879945773527" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.11132333527311156" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.844150250547065" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.33039981915660777" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7974692884192427" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6327017812492792" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6820935920183451"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3880115059176794" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26375514934628597">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20457781318495138">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3737719247401152">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6495326523277216">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6802024058006546"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15481200058955435"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9087057565935266"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.48922296717661773"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9779670758889669"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09340424115486501"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.43288999953947016"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6470793320885881"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7399725271856123"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.36661735413239827"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6064901929184205"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.023603171377392318"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5263569485235982"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.17242129733132971"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6536338393493693"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.42791579989153017"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.37518652287545207"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7276820800298307"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.12397179285760784"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
