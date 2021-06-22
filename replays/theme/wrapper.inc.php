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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8511063082420964" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.2782840443334269" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.2071166838765346" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.17705146941262817" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.48441200160009856" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.9813767273062379" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.04529077402823933"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.6415509379575801" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7964731921701862">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9891346185156535">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.8212995401462666">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.9309152072075966">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5078243902244353"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.28072371126659323"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.32748646570508533"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7300524334115734"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.34517069972934866"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5975344750365359"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.21837818215657046"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.23316044578602435"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5467299854531114"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5197704086493522"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.043544533597754675"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.07628591250464667"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6657977936910129"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6689504472138499"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5732938740157807"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.19572032038118392"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.1627896472147956"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.429012949763832"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.405083076935594"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
