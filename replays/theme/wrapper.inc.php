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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9276030074563673" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.4755748194815663" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.35828933838765376" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4363958005272892" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.32246105676256187" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.06243684271008987" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.22095124698443303"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.08127738705136744" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8965009198870546">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.45080953936795454">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.18943055281052557">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.3094010409587171">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2988987210245746"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9259614864050036"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.31018661656591884"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.14256495521998258"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.760246713429197"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.968117483524759"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6153995584532106"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.966960384435632"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6954163126767758"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3626113055947848"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8223420662536718"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6687512571844898"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.13717810560851573"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.865609447336299"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3582281643505647"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5440028968437713"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.386621677343743"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1549658542822252"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.16548388407580106"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
