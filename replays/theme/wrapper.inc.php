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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7662056684566618" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.6435798516330031" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6365608880628311" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.2376330173020087" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9853610258450243" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.720034417116652" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.686747899210145"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7612461845775826" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42134678687380367">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7242873983174647">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.914182093315014">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.4684062174135417">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4491177718582622"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.6551680130233724"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.3709215576321512"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2073377130323697"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.9320284749737515"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6898661158448058"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.942679725269284"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6572435989680265"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.8339169679271747"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.7463506172250893"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.27539422219577037"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.1855045365767627"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.8810340801542371"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5807544413737509"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.14610532682891408"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.1425202590018544"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.04339957704201747"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.47463301889651266"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9854460427808998"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
