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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4854597363255444" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.2799217598041108" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.139153253491634" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7521079353708211" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5591040161464782" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8001101629333176" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.26697624087292193"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6305906967657722" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6730746372923482">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1643045131042995">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.28475389566415577">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5617345483762606">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9999680783766927"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7715032946748073"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.923865179994477"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8819014768943128"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1846453109806907"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3969989619827159"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.26748908246983927"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4758878164144207"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7516448487335168"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4224006932239208"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5037288874110444"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.0024589209192553696"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.26722750264889417"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6182811085885302"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.549707214623365"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.38348644265002907"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5676847099203561"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6644648729812075"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2282941347092997"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
