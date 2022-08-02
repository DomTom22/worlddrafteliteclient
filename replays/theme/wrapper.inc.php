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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5262166225009068" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.9105955599699727" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.6554745176835148" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.04418459796294072" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.046755391862433715" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8141398210372033" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.39452871653502375"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.03794428572712105" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8034250293350729">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.36706395164299854">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.682550697997216">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.13252685341556525">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07982869223817546"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.570574123215686"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.12172515380302906"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5058350620209564"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.3895765533308111"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5073162778756621"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.42227954347391394"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6040418704068584"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.09545683061764487"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.17083199762830503"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.034428862396816085"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.2732810259883418"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.04518655254756743"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.06678752577179936"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7086565121483812"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.20336288981658024"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9885601384868481"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.33498473319237343"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.04890699886657712"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
