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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.3087730510491904" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.2647404176701982" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6507484514053354" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.4248037980559609" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6169747523288853" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.22936389407926083" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.7022192573666552"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.13331743111917027" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9848131453496574">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8847827002115367">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.2874133992268886">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6016055574008672">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04725240149477794"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9738250297209137"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.4461498890936537"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9037741926286078"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.649086856868246"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8841640517048532"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8806036287515042"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.4911634319201803"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.9937698108626805"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.23554536681264837"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.4451541546131903"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.45185962229897303"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.9007570616678313"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.33528193872247813"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.12430675915631628"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.19414955177573145"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.49726323093257596"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7322510432195972"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6348171712514534"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
