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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.03619190125552452" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.4956208123421193" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.11101727736471756" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.15057221241561392" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6753214104128775" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.47076200829477943" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.41944202734681535"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.046792399185116906" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8318148499456186">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1284272670376585">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.294602364058391">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5516601683088467">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04609200992554552"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4630666899010747"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.29096975514385304"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9346555265128433"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9617048888675568"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3362267387076876"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.22827405962883796"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6782328792655936"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6217577499252185"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7113222501102567"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.2546294220333285"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5997096815567213"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8038243155150746"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.1767089932638588"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5365037217918347"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.33002590392473374"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4108516816215857"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7997552090926081"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.05392809602059234"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
