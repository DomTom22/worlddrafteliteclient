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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.32970788157117537" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6511568238843815" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.03533005522069921" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4694342425024527" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.4964393443391002" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7213452754374947" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.47684070360068564"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3701184524549779" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.00991823074625442">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.782417843130492">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9904555339754946">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.12135150042384013">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.647006068023728"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.0077280678251472334"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.22934026966344523"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09960509939237472"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.17107320204893406"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9717172134962806"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3337344557057178"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8330697384257253"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.974157509062388"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.07051446948621498"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7130006989029702"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5778702755434804"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9690452653361772"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8750711139155882"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.4039835331432924"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5995656391946687"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8333969317894494"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.23168867426914108"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.12543544827085018"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
