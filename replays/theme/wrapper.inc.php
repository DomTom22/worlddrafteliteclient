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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5029477892417715" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.2951337469079953" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3933952674145029" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5651400981396166" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7832951828003902" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8706387909061146" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8157845468730185"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.9034429683767973" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5109704385134162">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19012455137782736">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.43057225474938754">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.4307004440774316">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5116812598536382"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7783591952121702"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.0747887299412402"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5534902037292431"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9326206968774469"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8727132957931236"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4224298435990317"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.08521743427065465"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3138351634319132"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6695886770853865"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5356019074695328"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.07097282277443817"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3205144150324808"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7936063460357792"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6894587472286307"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.24359479824045271"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9942700193866567"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.09555302217274808"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.11965560557950883"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
