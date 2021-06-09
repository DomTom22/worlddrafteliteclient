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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.053201634740259296" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.5369534973067072" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5441289020948106" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.8178175480092895" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6970419773734826" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9580298170556807" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.04151681697270071"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.44759244353324834" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6937315211069692">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6342313742817813">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.04866923377449428">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8219585997337409">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4798855356782403"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.14168483622602612"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.3051060515134849"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9096331012035037"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.3626714917454843"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5113796251464644"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.3514261877984499"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.2948830800083886"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.8219625656025682"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.6144576092992939"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.45170953707224903"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.7612924780883308"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.17722661611660961"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5036608499162043"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7268337121363628"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.16482675857724516"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.07656067783479914"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8042283003643866"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.7901612614240447"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
