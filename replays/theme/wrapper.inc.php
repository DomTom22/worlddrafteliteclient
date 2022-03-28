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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7477077619244625" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.2217878898740977" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.03582663020186194" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8451912299252868" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6969302162177691" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.742884257855476" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.9141825317646426"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.36062491335124736" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09128446925029454">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.468184380248734">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.1963193802026364">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5632827084782241">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.36841928778881017"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4251400990004739"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.06038930916286911"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6618910780268228"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.40875110712596086"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3095290134359905"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8992097087542195"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5193294500882251"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.17419782948915952"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.39507708572169076"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.07380156003537364"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9578313245205676"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6882082633653595"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5377664327118663"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8121163800308453"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.032348549943051585"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8142277113229037"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.0765169615046164"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.010197610353385622"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
