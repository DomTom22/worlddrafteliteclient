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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9635712469161337" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6571953833826354" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.42786993975757825" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.11100290430451265" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1195955795695196" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.16988744285981916" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8326794955829633"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.4878898275526604" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.524381540689606">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24878022327167737">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7028898049558949">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.22642179844496702">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3805363082442996"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7522396557305899"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6256283530118065"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06961398637555494"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8794024367158124"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4875487742196689"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.22602744596197577"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.646568045293471"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4731639500107523"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.48478694294805535"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9966901513338227"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6271485256463998"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.10898915133522813"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1447875045613376"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4298462052757115"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3048694157357943"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6142602848152858"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5974732990138021"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3016386369929016"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
