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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6099690709767411" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.693960892143691" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.8371806125230992" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.18309382030761423" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.2324207741509856" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6833856978092194" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.77168909460409"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8956174320631849" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8607248051887388">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35480611203062007">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.08954770135503964">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.07997755345653901">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07277024546944921"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.061599854899184736"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5115246323827713"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7962787481645754"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8777943447288283"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6118951699662689"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.048309855301787774"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.20950480054570675"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.17893732534657714"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7836785097386423"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.742124360364639"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3868236645978529"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.3729028112936488"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.899450165310872"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8552504050407976"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.09509374430470041"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.49270877081273046"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.28563310922852936"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.4673739972506621"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
