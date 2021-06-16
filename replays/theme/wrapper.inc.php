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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7254398613039346" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.6280076797770189" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9875126954845832" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.13037317870601894" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.32065958517218673" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.17093674498783407" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.1791757736545483"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.8838338723255164" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1632410168364753">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1995561088528477">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.3272517067871077">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6752273794470263">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7738296059046295"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.4291464123502826"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.2654167302957"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5893814232248904"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.6688227048807032"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8673624861351963"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7217395072790398"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8172633312360948"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.2995516235616722"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.48506973764330197"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.4614013762267415"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6984730628260338"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.1372562534854498"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5806578422374165"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.22685391343387962"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.15836578897887876"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.1532614480922605"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6153664077831817"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.7625383704460713"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
