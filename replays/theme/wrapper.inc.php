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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5458669974200385" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.860512186003866" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.9610092201981988" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4552480423681273" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.09690005809831037" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.792932707221147" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.6475179753907108"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6086823888703348" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7448895576529619">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9823721489504023">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.44467976135457854">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.038896860262565225">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9771955618833521"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4915277427224025"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.12703450372038594"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0611594109679765"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8807989127552664"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9863005963459861"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5802262469869679"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7180552329623766"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.027894156286047966"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.02966078714579279"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.176979682403279"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.11147155906678718"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.7627762493261314"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.25210399891812596"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7114032757570588"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.994313005409496"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8963431929647734"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5975690498157145"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.43328524539356716"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
