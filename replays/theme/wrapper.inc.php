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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7773677652402096" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.799293062925619" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.7999598716083138" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.0577595301966185" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.46375771832354906" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8360557176456782" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.44038520008719195"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.42270431413749177" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17830433751458963">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8533972035713617">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.8316496774712248">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.9553207131414323">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2763115646472545"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.47018918880661165"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5965989410626766"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10976362088311076"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.988210018885781"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3300914412294287"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5608434862964484"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8247783222312719"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.1446902126728613"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.16371498991705558"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.6588956882737198"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.44690107701900383"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.39526495335485845"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8218239272155801"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7961493118258685"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.27437417188425517"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5397329366653925"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.40887995284481216"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.004350529799522773"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
