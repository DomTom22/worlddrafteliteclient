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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.921239497143679" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.2716064397735729" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.7627251656086145" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.43044053435563745" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.2276142347620187" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.013080041471144277" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.39660052796963674"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.8618622694586411" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.85771517582175">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.708404266467834">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.9586759338294388">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.25914442650781977">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19161194851338115"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.29580250051321033"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.08553831992531191"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43370892915802894"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.05390208549011688"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.838465893842173"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7641605254200257"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7140628862133316"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.2582662363735402"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.13599453401113926"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.037715007279455426"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.3800546276551011"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.8154716157268449"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8199291678306921"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.10411037295606551"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.5772831852239895"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.07111330113924286"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.2748874163442774"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.07435086713664463"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
