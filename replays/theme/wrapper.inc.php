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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.05576641234013535" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.5579807263819119" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.787910972324759" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.05502596937974613" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6285446171141948" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.3369389738647113" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.951944353574095"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7365099310276906" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9996183742179092">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.30847490466294936">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.9773557536199138">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.03372511100614628">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0914128897555131"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.10925865370620147"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5888475897373036"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5387593529498225"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.14960124768344052"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8685911232529211"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.08451866251703732"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7266312176290777"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.8376527399954923"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.07074278519016897"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.13851367267780246"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.7419229208155866"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.856575283141433"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.43723023370021163"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.13192732138021745"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.739265674454229"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8326446161027135"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.5754408814110725"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8763701497260654"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
