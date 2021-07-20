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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.35698648478643946" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.4153954900439705" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.657048296649728" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.6084784686797011" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.1761735821651227" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7687651450125446" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.659422427932217"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6270029305039189" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7239678730718029">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2745594231514339">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.6153761607516124">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.05694756905128928">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14766880442131147"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9630967219492763"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.7032357935226337"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3910206735946269"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.17610776286825147"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.31289864754682406"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5631222637161706"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.2132011608461981"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3083609232206803"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.4291938644519049"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.8441609121908265"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.027493917755737174"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6305852525353961"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9481920399034192"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.03927270782754411"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.2424897880460135"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8831667704674016"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4677553976549069"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.2396369767110782"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
