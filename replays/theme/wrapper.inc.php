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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5448349116006934" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9187880029166584" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.45394373893648776" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1939985373350348" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.27245187765767076" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4702677784767484" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6658870688035972"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.29417998779515475" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6445038643554859">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05993484002602778">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7315548737218245">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9960660091287061">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5832161684311781"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1878513524511225"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16734320649620327"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36568180069542877"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2591152438527067"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5714114371225494"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4062564038274996"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3192761745086017"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7479168804331513"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.13489041303401827"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5273079997908803"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.16113728899947444"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.01239295889101033"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.33364385320942014"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9383582652036881"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.16611523173790643"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.03585563021443239"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4302658203790055"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5148841015897105"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
