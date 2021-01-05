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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.991258729826276" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.32090855306935273" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3294787387072933" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.33065132184529755" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.39508049463411465" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7620626625448446" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.9481174147276097"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.1891036041931473" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10325000839700116">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07625594432847116">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.5347867612960626">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.26726196661412405">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09761259911791775"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.22403256865158427"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9299981369174057"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3637633967766465"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.47488686935995283"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24133635744076476"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5483700969412983"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4690115199059104"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.11095010120990834"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7079117080713491"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9268353302537269"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.633223769441378"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.18558232526551577"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4562566249330473"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5532693671635451"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5774848958103866"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6491868161903587"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2786123094632529"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.694768466401126"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
