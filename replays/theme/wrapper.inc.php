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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.23459214854891886" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8606021572638285" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.3459826376282962" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9397359435988024" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.5561974227357063" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.10033302352382512" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8485784898250868"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17831360418956832" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18278763923959707">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6978046529939994">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.24485345314043294">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.623786100997336">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9267878888048053"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.1318291813626995"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.18174193914583392"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5363968044555916"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9716606584433813"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6031252050486036"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.021308708784807395"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.23795755392452955"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5492986091421423"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5962979983646077"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.2561335962561462"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6564736893519734"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.23077402382322298"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7355911952132927"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.1150502684324215"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.2046627501709739"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8178496324865947"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.09363626817259929"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8630292538018938"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
