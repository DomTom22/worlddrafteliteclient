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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.17868610812662755" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5249715007390312" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.3699953506629827" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7131972826482456" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.3449755536789667" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.1269497641987507" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6423061919659243"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8633281407287163" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05273049514424155">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.001772739009380686">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8736071375590371">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7682093509823453">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6512994457560477"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.32307877422074704"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.27080663357112944"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2340182271114679"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9936197404293339"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7263388020300514"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.07454089295371102"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8901666742857066"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.07272242121960715"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.46414870381354145"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7458412473222129"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.030222393342704823"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8940450389412307"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3872902991597704"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.0338288021377291"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6452142962380254"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.18528753654860997"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5294320647578534"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.1314401073641871"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
