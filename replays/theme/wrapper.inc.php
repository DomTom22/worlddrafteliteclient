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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7545638898364171" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.2510042587003942" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.6869175651579342" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5277920255995507" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8530074295596333" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5542261379927993" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.1915494681856802"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.13821513929529883" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16786756765603683">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2724728939856722">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.019535471790559367">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.8202062329394766">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10882446874676166"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.25775486783594714"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.05930964138148287"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6329073816682682"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8109689218456639"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17518642603804846"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8747906967484309"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5718204236071045"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6690865637974468"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9826785040702233"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.8036770361441024"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.2848960751507503"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6835664714112764"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.277312115266531"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5772786716900664"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.2723065095504904"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.48243769164409134"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.1137874289813341"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.5975066415670063"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
