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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.030395179451922827" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.16942706305281763" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.689342810249822" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7173882930107474" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8461241569704263" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.024021674462649356" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.965607424062429"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5576767324671066" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5167933691942006">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7851623015287137">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.36075139841505277">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.16577407678812772">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7941002535517556"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.00037966721468341014"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.3038809926247701"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.014290846177478445"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.3202722219845"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9246419364948286"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5178215772750978"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.333998947277687"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9287425562751741"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.37009273794842423"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7556496197620317"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5376727685370981"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8894632660764459"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.21613304189573723"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.17060172524955708"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.27111617923790376"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.2796319915770653"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.46913176538360424"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6543148271989614"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
