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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.770509939643993" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.8644365130595659" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.2424334465095499" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.4994574322038885" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.5225418526843129" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.06331860002845446" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.7361998751425385"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.624891543634589" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5278235248117411">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5004689213694908">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.21286525647087529">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.7719971480567873">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06431792846813233"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9392355855805867"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.24845968169006505"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03146335850612658"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.5198537942556996"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9297491773551521"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7808076948606362"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8899594294843836"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.3278792462525928"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.4830640310279426"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.1891886108411387"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.12790839908484908"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.8490794643539421"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.9131673649662106"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.3112617131388562"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6153964083082679"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.1647150479528554"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9267982667709085"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.789816624181944"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
