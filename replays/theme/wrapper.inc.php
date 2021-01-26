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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4430203375523123" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6627842475128021" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.686098750392796" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.30591634304547566" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8574871096945236" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07935410808574672" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6662830585940633"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.3390831835848993" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5350157565718929">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8446996240067934">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8015803834359867">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8290403788879814">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4195293720875448"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6133139293519929"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9390540150957472"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9434586301818795"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7973783974369182"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.26654833257430743"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5062896057498376"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.003959270491887379"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.23599549986324075"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8369533918662995"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.25019617850931897"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9747503324310813"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9716368025266031"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0038890846970855986"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.18159864388612612"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9372011131774896"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7285422659779794"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4924483501761594"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.08352611304362734"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
