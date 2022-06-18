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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7264691118813225" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5117187484811878" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.11952866875695012" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8799586878779413" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.07968365202359484" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.741846476119471" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.08412965947049722"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.46358703021147374" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8771433251247365">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.49095164777576095">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.4858924007281302">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.06485665651782413">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22495404884036807"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6890527724339335"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6873651919963422"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4003704161956023"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8404559039663322"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.39893029232668176"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5953575565387677"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6461379952381938"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8790516685868393"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6831468243660539"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.23737698196721135"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.38161336797777623"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.1266059265995334"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.23808687793499672"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.4456288137276416"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5508331972609481"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.619846508710681"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6673823266550993"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.06666268659870345"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
