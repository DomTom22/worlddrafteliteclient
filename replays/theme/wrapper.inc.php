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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10708003107164221" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.382145277572838" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.2720078523847047" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.27997009635515213" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.38542656630489636" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7849898254249528" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.20106859186336967"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5444429446593926" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2703850256185092">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1657407154470143">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.3585261351297644">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5113695800764653">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8329678830274156"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5469053815280174"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.0411289128167005"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.340108730640281"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10664859733388221"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49580767131085235"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5220397561866283"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8782034048793439"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.622542020943559"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8681081094317973"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7632469544309628"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3578571410707405"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.824157987730199"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7092238948379537"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1067991834801596"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5117421363708963"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.34819457002904497"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2821056331062122"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4698993458006193"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
