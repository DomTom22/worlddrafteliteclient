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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.31673126770167137" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.49641925449816027" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.051655428122591385" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.6038639437082731" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.8091984207429932" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.3367123620183856" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5054295176940975"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.37535878609734263" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7630222002649967">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9016610707949169">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.4162053237856942">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.2357254848028223">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5838706212458582"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.32229995524245414"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5709891718989808"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.47661837687643316"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8360655597205213"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6440633576909047"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8073655051531026"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.2631689501320704"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.7251662259599503"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.27603193946025373"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7587219761728432"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.7418651848479316"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5535322364395097"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.7022922651810617"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.4877659392714224"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.25028509601110493"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6412159916548095"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.18723449663047753"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.15845354057101724"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
