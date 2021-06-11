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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.0622159933871671" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.9180456665898546" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.02619002869409437" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.4770282021192589" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.21860138110896932" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9490772183605161" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.446172322715485"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.32683048555470706" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9635473299866371">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9808978280569536">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.14174904394664356">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.5539309171066542">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8765615568877543"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.510700575580465"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.8945621884652513"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39547860739076546"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7615481926050303"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8304708541021149"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.3824140390070705"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.17134471173855248"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.30499375060920486"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.28679253749239986"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.05221152777552551"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.21468656638729078"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.13766754818468807"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.04386807928931091"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.1865546739550581"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.4696368411004028"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9175964282469533"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8561025010208567"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.1984643950137952"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
