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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4100646969657551" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5174589748177136" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.45343859148343535" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9375814201368078" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.10336048826192878" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.03180049468373447" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.41209894194366203"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.49866880427670224" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34085467531594715">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7781830950945547">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7653991372867206">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6619215820492204">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0953807173798995"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2627340491667298"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.40605714770781964"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5966226738192164"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6349169452560817"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6070057904890951"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9648526678462921"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.784128742686687"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6690417029793854"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5657795607915284"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1763478623279513"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6022050566271946"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8216948981098329"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5168515202253805"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6651039106344394"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.20064081125289213"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.18330201132198565"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6499745528370151"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8198367773598871"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
