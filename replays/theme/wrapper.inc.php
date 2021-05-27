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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.2706738299240663" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.6036836752461963" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.8119294718400294" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.1258447716953215" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.2601152274207721" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.18000141377904133" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.6467851144588515"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6600076125198528" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.31897275000986225">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8554835479571068">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8109703386204434">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8525904188144235">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5908612621028111"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9017387236700458"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6721969682545754"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09849862194517556"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.26904618076925435"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6875775967823357"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.30164488864422667"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.4606409709984063"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6207487165183305"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.0046235221280295224"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9203321283508754"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6792271469389761"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.04022208423870599"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.12114902989178722"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7013935627308854"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.4841919948690927"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.32461459719902974"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.006721038992713035"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9719036419101981"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
