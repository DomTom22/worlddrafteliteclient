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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.835275574905852" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.28090962207808756" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.29109988767757056" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6270484542074908" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7061247074877419" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8995761806295095" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8932704581593447"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8923851133233145" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6711382470415517">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6631287217569808">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.27568021631942385">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.49705726673600625">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7028176236310091"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7969590429294899"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.09169201952913397"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.237891066635048"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10921897758566046"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2673485741894188"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.20757751662825985"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6745878299166821"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.009209347790166467"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.015587887303841974"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5568581294071153"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6895860722199858"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6255125543821083"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4525229201856573"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.41958614837593733"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.917607539495592"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8071649443076079"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6313795474853405"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9469878214544494"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
