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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8983856144065727" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.2502641421135823" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.30805837139164627" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9633636438872966" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8895440529947971" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7724494713345555" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.23222984255231505"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.43426842329812" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9874349425517612">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9831835517345369">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.3479689799371408">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.18734378242520355">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7806139817545821"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.05439637871868941"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.2808449928991952"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7735597547175022"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.49305856219896227"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4552962541329284"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.03707838235029559"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8065648914935366"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6326542380032982"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9648063897385799"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7722668138944853"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7229161906868353"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9039474259105409"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.46053542737645214"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.60791373680111"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.04809056317438731"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.10360605149289781"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4357287256309894"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8078353087193335"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
