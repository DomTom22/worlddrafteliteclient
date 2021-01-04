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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6331773983572697" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6823713886253309" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3135170177459734" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.466516677989822" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.924302672821907" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8086254992247455" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3635141246820568"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.3393761836564748" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2814717608863764">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7002300832784498">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.9651851711584121">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8358624659869096">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.33124321239528287"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7957073797087291"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9314569761274432"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8929772085297796"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8294522607451396"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4605268562042033"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9800357051720088"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3144634810858109"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3671680649820228"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.09781301974059042"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.05359176234365148"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5832135090586794"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.48486624883155116"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.30512722183254337"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.12837744638387716"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8331353345600223"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3687647189692951"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3155327867307425"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.15721966634390516"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
