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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7014713576090443" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.26133506488681557" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.031870958100085556" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.43439342359879185" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.5910259412222827" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.1067330703003111" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.007176465256102826"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6039605737199636" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.005625558194144675">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9368569200015824">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.46849615559470337">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.749253768455358">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7153947944830017"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5704588419222876"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9169368518374119"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18365268023291303"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.1999825195196936"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5820893688106725"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8055899627701497"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.21887760012869717"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3470520595645066"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.17437366230987172"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.43099917200455984"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.11887328168164002"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.17495874918253773"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5143575300618595"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.4953512929677679"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7302372788891693"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.12854539083440963"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4056235541614919"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.641677008698895"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
