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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.03041320139390913" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.3337304836416335" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.38808538857811614" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3500718398292535" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.21625781692898594" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3854653893195752" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6616172775082212"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.1355296267431063" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6948994668364721">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4460249997064798">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.21833764956460033">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8298495494444742">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5896802495131357"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2624475963742203"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6389345481508213"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8909069321470651"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9482812533422051"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4145886287779261"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.63070562183081"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.02952752115549062"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.48601339504600904"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5601763671798505"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7586124172539541"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6072236104537063"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1148978789255164"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7691046311496923"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.948961397346854"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.650697775474461"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7384425296654107"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7909203553126409"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8129754846090882"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
