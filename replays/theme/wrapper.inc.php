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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.47029069981920224" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.7528255251777882" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.10049970513467898" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7756791261816824" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.0801557058835789" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.413622228408157" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.47018444781142144"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.522731611702643" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13116608378885863">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3437815887298772">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.015192923349974352">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8357413476673505">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5700700617762517"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.2827986536547489"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.09308502741877911"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8155651760641494"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.025162071655221885"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7452531347251399"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3548498016004862"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7924863318905246"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6894290597577561"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6127185701719546"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7421949592628099"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.4271985662773061"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.891317393371696"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.11594302434189774"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5308133952204306"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5466345631236957"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8092927649824264"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5230465835114904"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.3754186829628101"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
