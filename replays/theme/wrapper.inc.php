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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.1327641797699255" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.0863138128935772" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.12612570434727344" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9926818350524078" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.3010156841020373" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.597301861168769" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5367769433901735"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.964464056956599" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08632986693671074">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06731342606810031">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.7169577705941332">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7145711259791612">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.02228725180651603"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.19204956406756324"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.3882713727569884"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15352993691792327"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.4082631080740384"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9843535070265412"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5185563674843692"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7003865001937823"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.24604940854186652"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6235278929495924"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.061223111491244486"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.042622399914437725"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.3920331453434047"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.09187811295919524"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6956716486286776"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.49331043467667346"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.09907529736397902"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7291904528272124"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9187815528236123"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
