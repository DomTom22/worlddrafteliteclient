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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6544426333195881" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.11163855217445606" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.541291379165348" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.3122938694222974" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9928050317256876" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6950281859444876" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.4784308922234275"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5821090184950961" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22036455156707913">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09583386308088926">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.07378306333382634">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.9077861169631516">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5269312245715279"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4097402125568572"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.1426938523212049"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9874217140689208"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.17841064460665024"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7028838855251318"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8609468053240239"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.05819742448694476"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3932535304578437"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7960006750886621"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5591806323733544"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.575488071750051"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6482138305509615"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.16081859149752797"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.48356377662398664"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.11639825216447353"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8007132611185961"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.23442398626605665"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.505815797263282"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
