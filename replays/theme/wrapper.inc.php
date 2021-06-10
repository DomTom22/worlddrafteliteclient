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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.4270892937436559" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.7176622262303527" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5225358452472235" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.43929687237236004" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7135520293850879" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.2875451516637664" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.20896170022237115"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.099563765163454" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4679066370211864">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7610365955165745">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.15869898988572406">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6972815212544381">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4834239342609652"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.3109871777053197"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.2589302612835389"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5952419739703187"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.37656208607715413"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.46103007253615647"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.43110411997727516"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7410775003619006"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.2651304678082145"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.13262055796032923"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9117915086824735"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8589450211656453"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.34728400895160805"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.40769862167308224"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8972929516122641"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.2391062606407517"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6494707459373108"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7983005452706964"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.5537515766268841"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
