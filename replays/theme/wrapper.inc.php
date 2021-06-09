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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.44441566906837005" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.3571583954976729" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.49955908455113573" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.5809137449749648" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7160544824345505" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.965074995981337" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5803814925379713"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.4247571300367521" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7613166844436832">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5761751224511402">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.09763935655675504">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.840162677884009">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7592114273898853"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.44532017750272934"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.8244261012130218"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7118525613163809"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.37414422395834035"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.007026661274902146"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.3220053968930807"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.20936827651812528"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.012519883347365424"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.4773227333141803"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7140836491221401"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.2871996785878561"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.014667509375647425"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.1982321110474965"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.06580485480463927"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.2665807485344891"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9135001586932643"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8773862484262329"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.7696701047504666"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
