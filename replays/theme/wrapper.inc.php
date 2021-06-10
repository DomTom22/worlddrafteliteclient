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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.3598518624476106" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.579228825011473" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.3251120575841375" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.1879371364741076" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.43396330449859977" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5847141494366637" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.6012357936069761"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7924865217158217" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.526600818043486">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4006892641711932">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5335716497002856">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6052967854765916">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06873667424258056"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.2409488813765832"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.927765101988349"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5843412008759563"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.3875025637207945"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7193341620769573"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.09031662905822602"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.3234074106188798"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.3923076548276956"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5558968451438169"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.3861064356582138"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8188665198282783"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.23650533705432486"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8819336951360119"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.5540681260662497"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6254226919454953"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.1198187113636604"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9489709494380223"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.017885674183867106"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
