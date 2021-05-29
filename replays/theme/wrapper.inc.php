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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.22344529710995942" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.5798250045535545" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.1149063930898302" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.16322965957220914" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.32854537699401987" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.23292234840134496" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.08312040333856463"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.10094204134825713" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7319653890774995">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1008952536528156">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5043054985220223">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.3688130111634462">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.829212432362556"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8033544158190877"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5101248749858869"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5402142728934616"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.6465904327815768"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47264794595488757"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9460295659211442"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.45720708363349405"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.745698836521387"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.6710436791845109"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.8943786555217905"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8229383963922297"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5785353939337945"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.21406655781130635"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.2402058391190136"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.24573459725663138"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.7981908096706791"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.587779688078728"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9504319026039894"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
