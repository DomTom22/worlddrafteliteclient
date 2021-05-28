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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.43426955241591014" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.046510437122152526" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5530564679383474" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7419644871481601" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.3515736360074826" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.39840823507937473" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.2197128570436051"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5925245035588094" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5682744080741886">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.473833381942131">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.15820798311221296">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.4606129099409475">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0009652810795717226"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.32714535594651517"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6011409509901049"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.34473795541869334"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.23656439649490957"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4204486680345145"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5004057694300297"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.5635274033905995"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.3941767759116581"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.350587448767236"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.3617392041236651"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6003301874549585"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.529842169297039"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.1031051894707713"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.638169675414233"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.993250403320362"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9774124208727459"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.5908969134163504"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.15204826538344474"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
