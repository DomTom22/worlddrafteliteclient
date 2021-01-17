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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9092329972366759" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7283250971348498" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.010326303578798823" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.13631994752129017" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5060683050192194" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.040940125042089104" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.525296217556686"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6456700755665652" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6996818260181132">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7577003052798961">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8000992230182127">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9207005382502993">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19323099688301015"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.31102437775501546"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5160090899767735"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3467798918728995"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.04437933467060162"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6405701564630037"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9922986434085785"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9959134622753167"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6251896177401115"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2936449152552816"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2520913685025883"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.049265745666990934"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6087983659521325"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4625564670073592"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6530957568922007"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.23931120899264635"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.16631885659015988"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6437629103257778"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9436399339690522"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
