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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9786937291616602" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6424679494272407" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4281218291328106" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8802657317007694" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.23858627016993972" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6993090432649876" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3187359420389635"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.22973928987090297" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34770562606642663">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9336893022218589">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.31886051951360295">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4202724495848018">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31394510455817004"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.14781285734944083"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3088485275387449"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.500299682295384"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5315872761810605"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2799182309191073"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8875014989417416"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.38292596052048977"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.36210034672507807"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6743254149723465"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.13782201118414927"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5347489151423832"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8405038698221334"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6941684402902906"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8892053986137631"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7334381238711258"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9840298460497046"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14571349574295622"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.20771311760628208"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
