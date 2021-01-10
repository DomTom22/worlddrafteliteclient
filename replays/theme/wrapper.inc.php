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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.46303616753894783" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.1301841728703712" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.22668867456804542" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8931185006961149" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.26718111094437424" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.306056372180076" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.044220567415790946"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.090350904579523" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8020034810235843">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.597164661940955">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.23648183467941708">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.15653604840775448">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5246856896145193"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6265076464659041"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.06221832794581661"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.014296611843539697"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9913035563721222"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.35835261914031213"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9064377911689909"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.08084483771170503"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.899372947641053"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8170770572705681"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8770533611826918"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.40151409404074667"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5395834503821542"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.21107910335323732"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.0168549681468928"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6289634198664855"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8052011036540847"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9594634299815352"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9113144664829038"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
