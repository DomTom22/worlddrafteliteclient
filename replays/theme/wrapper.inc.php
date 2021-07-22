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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.0583547516216143" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6102520374163851" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.8522469144768341" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.469541817042056" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7477677005569756" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7449308009490436" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.7738022542500538"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.18332342351342623" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34607740509338347">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5716187824208359">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.34494800237731327">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.17871509858236023">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5884208544962624"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7807872875183319"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9231136725613198"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10599830028172619"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.056345698014931944"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4196112743333187"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.28714873479778036"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9465691823197231"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3356476939472084"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.33896528998119146"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.005794049387686462"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.13396399745858512"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6912490817584025"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3487158771531338"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7244314331417232"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.8787002567038869"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.948208531006806"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.09667289766511789"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.09022033079712144"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
