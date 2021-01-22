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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.06312096256630673" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6017527698099034" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.44303107043189227" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6399176459377924" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.808443082637653" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.18851379928994083" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8487281985334192"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.4482031593674196" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7029413096762671">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08760629181729573">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.025622324584830825">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6861890253065885">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4748796004366449"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5565604382453941"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6270938326529774"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4556022110951543"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7747309294060059"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6798656121780615"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.40947008158460174"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7910161075866378"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3189208451505783"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9309633325157347"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5568084947227068"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.904039803760581"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6919230040035562"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0022126840773573075"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.45671150337793365"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.00568848338843897"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3611409859372683"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1587350916334085"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.03447657637694679"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
