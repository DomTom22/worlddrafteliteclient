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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.2528008287769452" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6964786306986195" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9700599958564537" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.379183431642965" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.30218503815606335" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.1533196025815744" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5578092209337575"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5495525772499781" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7862168304389954">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5486688360676235">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9211699584882913">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.19762746486913962">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.16092824212051027"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.985708106284515"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9506008803131529"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.734292472231298"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.13774960296661853"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6442517323102632"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9188585786982026"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.887573680345427"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3264055678391957"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.799233494409459"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5789296678871372"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.03825930570994429"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.7265391517463939"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5208367357862662"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.4048715061767387"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.2451057267888359"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5952009862624836"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9163402674989665"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.4790267983551666"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
