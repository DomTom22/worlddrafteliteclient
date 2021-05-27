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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.0223291773147416" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.27160706261121814" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.34214652686498725" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7819975438434656" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.8562670073334355" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.4663286676622267" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.06675132981725818"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.935256068178316" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8667804168640114">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5448279054552168">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.22415059059358455">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.18702478612382523">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.586150467651888"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.7293018118342964"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5625185653322122"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4935324587468177"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.9647222872034633"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8063083024650444"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.3016150545527847"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.45710610893770953"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.7222854498939739"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.6619624367839163"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.3164503875068594"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.9329823360952239"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.736036183184378"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5720896426636191"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.08396520996394119"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6958722123784191"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.2912229214995694"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.5518338037322585"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.29505187843740477"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
