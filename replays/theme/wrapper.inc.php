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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4025986249331037" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9850611971887773" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.01798851771835741" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22434803929489955" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7525553690853974" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9892766496794296" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.0636943791324951"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.23043511432984665" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7037637972285153">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.47625910826954665">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.1715760110705693">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.2834639672970176">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04564206712982255"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.20045881738644478"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5397473214298651"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3647827972301827"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4085418879274014"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.507184827763149"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1378236757754152"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5261138846135789"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9395753543055863"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.21689513401576677"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.020885915653409803"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9664433923144022"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5972227355596116"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9835004305020587"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6449613302123101"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4266003612119782"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.44984528189691675"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.03939653375944485"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8509709392199944"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
