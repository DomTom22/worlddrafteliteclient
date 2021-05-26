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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.12230811503846928" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.021723248164562392" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9127353371172442" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.2033322864067617" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.3291371510834693" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.458071956898072" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.8387175759712611"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.993035598552074" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9862714805603368">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5806798445641101">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.7482304383721994">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.7957280728144907">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8935260253619459"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.19276560765100736"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.058021885921152094"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8099462915473599"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.9552947529818197"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22627675637302747"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7384672688479141"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.5516884372814321"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.161211144853034"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.14800041989178014"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5521077522727211"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.9544551805061925"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.6123814460679056"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.07118683805188586"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.4837589213485931"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6227098659274908"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.43465394339636565"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.4086004014659732"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.2920241714990175"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
