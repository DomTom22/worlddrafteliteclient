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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.04177584312724458" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.370409881565976" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7161213025418585" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.32148942155938287" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.31652697366555493" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3422030605440156" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8521817758262467"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8404096786823294" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.393855263417602">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8315777066540824">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8461516390903574">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.278674995133958">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.895657357999605"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5558669773525866"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5004335544524341"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9838904094378862"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2029735185396604"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7926474823556864"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8926397699844277"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.702969386058854"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.26389719033460834"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5171993319461152"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7075022994383029"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.057245165048619207"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8488558991657804"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.12870513978801457"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.17594430815117557"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7925171587160038"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.926151995985435"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.11219492334014203"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.14681337224730195"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
