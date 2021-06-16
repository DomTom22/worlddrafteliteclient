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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.23444247021085118" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.43252159965167447" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5730398595610742" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.34299405467216615" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7913161590387885" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.7349143184234319" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.8333469200422912"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6100279043305106" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.28676152233288255">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2002618191905623">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.21433261640017265">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.05345833683835721">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14099432500707842"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8219964484906728"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9679639347494398"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5448053697371638"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7201021634619071"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4119831744308431"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.04354034086686909"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6254045675895956"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.4340833146701899"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.7544571227025156"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.36204051350608246"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.9805942059079191"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.6446956408544988"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.3275938098665987"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8786630733659229"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.03318986078801989"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.29567165823827923"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.41794635783420775"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.7191856621415595"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
