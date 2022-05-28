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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5087642164892292" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8952471547322467" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.41837454402797225" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7368083236129734" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.4543239640972332" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.06772790547815699" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.014262843292319527"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2736156382516317" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6397617936206175">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.49092764797726285">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.957327862956145">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.03562861756778091">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8994675997209454"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.2054376433562699"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.8790794852525217"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9229228765908837"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.47636287880068817"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4722375782776247"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.027500393851608296"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.23626080322244025"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8397360954136195"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7606903502010629"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.04758657161940261"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7564512562031864"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.08462093404109372"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8092330820635538"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.0012277191568248469"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.026154373677809817"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8367671746894199"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.06405243318573461"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.7165846159361415"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
