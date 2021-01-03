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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5915217189614368" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6338539105719294" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9193029247667066" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6017461806177189" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5948903453861849" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.14098932143192555" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.48341951128603133"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.11906769949853446" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6186492423978516">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9922206989260738">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6925189276612167">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.955111233417111">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7695819739195786"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.915951831256629"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6413022928554009"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3372377269018014"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7249048109705469"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.25561138180207044"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.10489772360242267"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.29622913169564935"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5901355473834611"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.34109694304968463"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.29334289364098054"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.21035863904531293"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7186662895695244"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6984738339378722"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4212922374361028"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.08786604525982744"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1902802349389321"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5966311387975698"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8949075104066633"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
