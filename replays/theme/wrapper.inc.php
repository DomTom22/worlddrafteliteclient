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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.1395364633769247" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.44310638031895544" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9460562024748222" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.002567829549424694" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9319695364920562" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5955406978190108" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.6536644481646059"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.049319052843007416" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6722788847629046">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6483023191342459">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.3965172080488486">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.924278518608664">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21878453396065334"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.905845189224842"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7848124611449299"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21362293960539902"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.38535018119857534"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07167104180657868"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.11784797107286993"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.026307111050005494"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6641897794889067"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5680817653662833"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.828354112532049"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8631572246471255"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.8719633630246693"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.4235951228758492"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7875637388021361"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6790149250278075"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5245135883026049"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.41367700810179087"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9872688144058135"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
