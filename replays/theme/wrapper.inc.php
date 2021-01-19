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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4818231892442568" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9462914866406551" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3803024181467012" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4029112999527271" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9370739355697337" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.37654959067898863" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3162906018436784"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8286309115298562" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.889671969737754">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5571123033266738">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8304385811948851">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.839102810609192">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8906935334026878"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.336154984669216"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9833249196841116"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.17165261798861087"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.25997478644352556"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06770616404876106"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5343975848935225"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9460019374784385"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.46519113237002463"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8301719807742451"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7280726553622929"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2867660706641111"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.11035405811554844"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8481831010631431"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7112293780990955"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4263848076045511"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5082869944960451"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.49927169871924204"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6064156773230538"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
