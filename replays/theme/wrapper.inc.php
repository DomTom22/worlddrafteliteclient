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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6232417383433742" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8583152666081062" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.514435503406961" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5348266143752096" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9253483897696981" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.012711692268372543" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8506658330588317"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15285575280323482" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6045791376991199">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5905320843621502">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.6729064740560562">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.904556615743084">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8488044229334692"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.25364166414611033"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.43848442002008015"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8254613745946004"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7232817533536291"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.26841523442903337"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.055180663122977425"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6099002169007928"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.1160113288507918"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.22039565163704133"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5332828375323531"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9378853146772099"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.12084047796659103"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8967195802710757"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7314195932670047"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.8656118526881249"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.0065455916522279"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6079987620794707"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.0931144421322363"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
