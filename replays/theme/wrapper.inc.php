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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7095560437584221" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.27337078485545896" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.999696500458779" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5118043688462273" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6946457388075062" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.014589571128317269" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6801276339481954"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3731440241226043" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6999421430329384">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6355749732397946">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.36081937596601943">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.6169068082349982">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.705517585010272"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.45562247830626745"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.42901714794255263"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.19562699430967045"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8653138290493976"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1601358388715477"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6381433411274497"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.52480889017591"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5363386479617935"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.02449107604041223"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.016389911634347554"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.33420411868663225"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.4853764986579361"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.282957122486897"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.2035216094075636"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.40967489247547095"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.923813544458761"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7561402642410662"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.7757612371155813"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
