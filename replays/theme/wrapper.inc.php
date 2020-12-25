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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3975713121077016" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.09504034634669023" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.45523548550003623" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3892935586450794" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.18185606304356794" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5465209217769418" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.011592108554766334"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5187892978144384" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.716431521491572">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8301862362429964">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8895978333085097">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6025167317223477">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7219472831704026"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8724744309245869"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7511647528873819"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43688719754931005"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4175274099557664"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6998128546732154"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6067529034657515"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5985447993896895"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.0526385377591716"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2669017091691541"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.14568739215965731"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9372106264151432"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.23503160036795556"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4143215091146317"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6289538104188668"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.04739734865457512"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4789959004811617"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5438460100049596"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1845583760174001"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
