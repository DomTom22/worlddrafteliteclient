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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7320704704757774" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.7285093144424646" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6672154273143158" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.8008792240713427" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7469922122292625" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.551993250591968" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.6971156001159096"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7338818930565356" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9674569359099296">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.774374668620367">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.7396732032303464">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.47617364046331234">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8932414204294268"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.42140435738216686"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7384077544599168"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9802396502818349"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7948702036010848"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7158311041072005"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9748848107085106"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.755540676286744"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.4151821521526029"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8224205345178373"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6649701683643778"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.035618358144676066"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.49167166602879964"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.586097226845971"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7056074586989995"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6005282081112102"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9077366318087805"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.4888358176562675"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.19358404204062918"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
