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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.0687141418251922" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.9975509194196615" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.7161980092368421" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9358498638398551" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.5673916086300621" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8582328136077624" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.11901692511031015"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.36974306190285366" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5120320039645234">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6334715483692626">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.3646340949472857">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.30930646525907535">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9606010800342195"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5464656581793261"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.706454729120815"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5344612262805921"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9471513994228165"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8885396243378569"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7028876109974314"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5703117556276964"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.09480693670564877"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9847179007129778"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.1587219000551916"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7329845945697426"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9293029899192367"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7644428712965241"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6409972358018894"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.314858700702229"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.923186194543441"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.43345985664948916"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8085593340786676"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
