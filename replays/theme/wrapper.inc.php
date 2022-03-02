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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8967381358267619" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.04002358012697527" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.016577115079253302" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9321716877790547" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.792606368873046" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.14667487227214027" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5478671058759745"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7205295645281646" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9342478341993923">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10591331695369344">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.7994572187867508">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.03194616716414145">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7892077036908884"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.023475976731781367"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.23602580297898923"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7881251516158065"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6601677372491703"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22393600343229725"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.13849052188614963"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.09114134937912022"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8195835230602926"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7888993096714694"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7144320824891015"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.552658909195948"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.22712934097799087"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.11130615096953322"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.19323302394333775"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9292883579272941"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8952327043516111"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.2844267189941203"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.10979827581857271"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
