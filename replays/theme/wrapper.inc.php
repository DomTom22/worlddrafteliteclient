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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8010198669302309" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5452642410740134" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2363331886476432" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.12365504014039042" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8284174162922102" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9511057402982965" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.09615197775925144"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4538822918386014" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7900031388587099">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.802169019048347">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6311980071211947">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.26438941778169833">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04438733002042583"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07604150265366094"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2067973822616065"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28251772366070305"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5152345892382699"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19242596391958355"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5197682639908068"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3481020840412601"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5667229057400021"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8052895097915169"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.17622833800640936"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.016194331981798538"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.33698672032339005"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.23140590328840993"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5005578907968218"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3120593973338208"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7406474884426553"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14198420482244734"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.12796052964455962"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
