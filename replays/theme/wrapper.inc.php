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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6736165870961612" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.1922447142877548" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.41541659418023347" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.2416905642913716" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6725312451253067" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.34437999588668666" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6045084515410697"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2190753198181732" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7109662391411744">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.38436399979645675">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.2464684152449197">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.639968990653978">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6327112006049311"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.10528613293778144"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9157514951143171"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9123422024231531"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.11317767160793846"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0762903573664564"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.07078267511703329"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9989038697117021"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9802260507541902"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7858285663610105"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.3141211735604703"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6860206382579115"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.38729782254221057"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6508930223543938"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5944277484251737"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7919305508101848"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9896465166508466"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9158481199257462"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.1936927022064694"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
