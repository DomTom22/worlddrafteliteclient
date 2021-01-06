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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.21791628921719153" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7618915025497013" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.07529376797179621" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.00636146307384422" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6329984296657079" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.42531297323482864" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8082455396727934"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.660152440410348" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9877005344299903">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08950773012453461">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.3760246683147679">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9488647599976887">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.43537270923700455"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6319055838258005"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.691627323507632"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3083076915493481"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.24532660897053038"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4069538228484437"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5708787165470519"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2245490269111563"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3168761703556011"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7056500747704597"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3833963310417068"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8013562092801141"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3761225711972078"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6826827543120899"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9211235219908838"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6624425559411631"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.09274164862084588"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7925053186659208"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.22123681288005814"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
