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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5955767235720111" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7509108109029083" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6763434360782159" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22532526622259197" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.003783175950219153" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4542091251898177" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.4767460891686277"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.9677568645964405" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0035020771158831288">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.834327594750782">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.13788079761377658">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9597402826978565">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4859813053999742"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5141506242942717"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8518099961336447"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9663554052465737"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.16757190580893844"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6484525778914574"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.0421380429412157"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3657687834531804"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8196826608547685"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3421009610867096"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6684955569936748"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9938871873863604"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5680497606053712"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.19943754190660856"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9077524291492736"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.38443562063561965"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4439363459489629"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.38465588619754665"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5048425881547427"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
