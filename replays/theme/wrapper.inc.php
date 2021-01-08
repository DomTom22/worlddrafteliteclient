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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.36335126307487453" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6951193327959349" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.1060460767810274" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.879121815714762" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9491584342168" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7071880879673389" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.08645466800871415"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.0008544489320259085" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8111241877555055">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.826442493132967">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.5571907249112265">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.05853156177627028">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5260266098013036"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1979050314910311"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8282564133561414"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.497093272338204"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6373622456510784"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6017096370385935"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9697404808311891"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.40628040315733926"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9244149312856629"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5669907431611609"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.662031988138392"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.40523795777894533"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9112655108612282"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.981851870979862"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3526767829227495"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.024159390124151914"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5185214098814181"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.34384225056570106"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5911257620604207"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
