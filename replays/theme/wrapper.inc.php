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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.49629500933042814" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.33717277559408587" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5241967064431565" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5457250307481409" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7500360969119737" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5154938438240415" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.05884209875760349"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4437113988396284" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.02273076555643727">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9048811885892152">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.19395647375624092">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.14713656328192148">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5340630545793874"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.013822040803284752"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6428932173392896"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42465732044994686"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.34286053474193756"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6234339051491296"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5470425208740646"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5249852640386123"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.984369748068668"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.35973705423620905"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.8374492458740166"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.8900826469336598"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.1115151835606305"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.4672039192135189"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.13616756061169788"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7051400997541528"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.28451751104427037"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8392205436347955"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.17045089120062817"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
