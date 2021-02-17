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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8803053677034309" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7338210155774634" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.0780805691560651" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5340237769182423" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2221412228367119" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8571539423535335" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8196351762810685"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8170634338584393" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5646450000133336">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1855172435055914">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6645842892193068">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5271792428853135">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.43398788748670025"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.46010155796408947"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5484712825717954"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8441257633848425"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.25291622654010326"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7497923557340753"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.07385908702673438"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.348902458463193"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2750275199393277"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.14993920613046918"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7091040413610712"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8031204186785936"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.902176215741989"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9927772084683513"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8449642363052536"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8650758243688788"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.688660586933151"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7309696479231995"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2893810577083531"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
