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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.36568995962606343" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.23494893431637842" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7364531593344104" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6515219390417466" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1568477388449636" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.499393694664922" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5708721605404457"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6332629098926372" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.017577910924595708">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8510964510558041">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.30256659580464373">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5496295802890478">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4948404726678366"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.19896778509189406"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.07759706658373777"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15896225418552268"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.33459358606222467"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7205557550192185"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.39043719234630125"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3137945587829758"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.27371924636288103"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.385894948872477"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4354988688805639"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.26916113929724017"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3972156411993897"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4600514567240175"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9822770259862337"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.47771608315942116"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6399306221558658"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.12427911455104912"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6464256166923972"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
