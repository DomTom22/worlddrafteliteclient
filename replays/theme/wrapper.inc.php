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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8275414965725292" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5434707156784271" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5820653205649948" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.1850241653145257" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.15328641113978758" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6726101209939099" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6288043465265043"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1629702027149953" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7726852058254832">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.038365590220543755">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.05312213372587027">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.6087015418322985">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6649036689157111"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.3290727612820299"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9614914693757846"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6613848261959558"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.18729560846713467"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07197363153409597"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9522169597223964"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6761310457918395"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.38803353790095385"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6504704248029258"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5824280161349604"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.30095559292441987"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.05115900423289976"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.02480390960773926"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.4092498289061286"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.25921096502592356"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.11119809323339536"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7192689059574129"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.3853513928830392"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
