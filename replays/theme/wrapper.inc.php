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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8360256864708902" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.2635604978505621" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.6775913499507042" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.2777242255807224" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.16453477760803636" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.39519691848097893" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.7865566641243269"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.14285213168798805" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41810900287866537">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09827081425582218">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8092610524235353">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.9081349663758729">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8643856021089915"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4196385584630462"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.113011082072497"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37981976136643425"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6188824045142971"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18731603801873398"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3000273692053763"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.461538205436298"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9080728081146467"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3673785628577739"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5760073834363997"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6180779129563372"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.36442414672185053"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8436646557142176"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7999196380683558"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3910432453968009"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8325251927543247"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.14613921396459872"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.45666796184644154"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
