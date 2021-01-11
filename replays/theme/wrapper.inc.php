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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9932592228269614" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.4038025618723846" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3908028588963157" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.04808152425390655" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.859404647849151" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6926643108544797" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.7100902612361082"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8918413970782155" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.004978217536789176">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9636256786646538">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.41906435633764594">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5558105799104129">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09945058658867545"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9721967502803508"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1486870979504029"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18520259186466426"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.22950818562865094"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10721362328731665"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6033274809613958"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.08915192998228516"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.14888997875984944"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.0324151779119175"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6388252442045617"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7210887760725377"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6751200816505469"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.15335538380835434"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1314258175911902"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7445559168634703"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9393500607827241"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5185518015021091"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.09744696887449189"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
