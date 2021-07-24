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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.45844656605065626" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.04163005984573176" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.13179854968841775" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5056385595314261" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8465107048263529" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.885542599236345" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.7814400131072243"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6995311498957675" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4167666517479298">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.48521466812629344">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.09321570459502615">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5852373830163291">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08764738798834015"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6822766275363203"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.15412278458354955"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8379340615931967"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6771536305018908"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8206134633086077"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.04585962973762436"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8471676117939879"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7018028948436783"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5932244046909478"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.011518019495478926"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.05668695069486818"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6379650454627643"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.24767310298457468"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5335884190556204"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.07650895622019216"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.177941288105256"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.23779142031777045"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.07663118969591509"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
