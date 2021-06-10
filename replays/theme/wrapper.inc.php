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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.08862994789476497" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.8853512600474509" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.7445806611990391" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7846092679078456" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9584487095056577" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9061873976520003" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.8298543425450782"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.20323682183150815" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1347937299718054">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8435073799747759">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8340855990374421">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.13702930574595862">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5160245236632877"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.3972158146239657"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.1472664792216858"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27607894255483245"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7742487961282287"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32133159919384435"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6165003821466883"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.4377585349150701"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.8991614635689125"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.08801835808770364"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.8277561828736069"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8589279793911684"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.9139517405962574"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.511473738104326"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7862623493984151"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.08218304751491323"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.03776500649671588"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9339719953636818"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.3009955490638736"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
