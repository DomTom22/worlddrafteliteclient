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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5073409098542878" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.9855465828141432" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.23880210544987457" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.2391769868922191" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.013838531250239816" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.9074897574637293" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.6883142422575104"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4668064340456748" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.477143614355628">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05732238434232717">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.685784203475212">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.025715906038628944">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3269778465298252"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4631693529444083"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5953478502600564"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3823445509693888"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.40856904588580956"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17104376980419178"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7051747999358409"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.18371935946862017"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7780586912430889"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5426396591592153"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.09688488628648928"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.826209933331796"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.28306979090878825"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5476533285226584"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.06945524621541566"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.048545428366000065"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.008251681790045318"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.01434207607663196"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.3928539031862086"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
