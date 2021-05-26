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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.18660211983109942" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.3507004908903184" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6749071901506718" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.9822018213760151" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.4353840615410449" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.09722096328905683" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.702869387563916"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5928364083087221" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8375532563130585">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7380808579605294">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.7951144730169817">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.9260261777934886">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08345606353010293"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8930580750209549"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.12978980735996348"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2728492619926488"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.5134574061109378"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8106977982115897"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7692485489338488"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.42518000664859046"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.47750256305186034"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.3479969873794502"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.2985196631636198"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.027356990840934126"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.6136535212632941"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8756797882751521"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.281552577927894"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.18830366062257742"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8083059446842082"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8315556245963998"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6299725450955653"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
