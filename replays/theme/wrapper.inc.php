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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5875333054731107" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.4502600009998865" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6264674986249927" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.616824305987925" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6314243805482518" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.4078777228269743" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.43390663287446873"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5305961969625717" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5689002840711124">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.03926671877568433">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.819307957805844">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.3471257106541419">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9129957411664971"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.45654639859148993"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.21335740935494596"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22103672983089306"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.45879322079454954"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6922332033585907"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8120256716606566"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.2878250141948431"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.2461015848944912"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5035449221141992"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5098012971772845"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.09056044615316705"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.9009665786458809"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.4544850018903561"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6999027886486344"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.8435195761366072"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.16231349730765476"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.971781137740205"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6289829538703267"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
