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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8391877180564993" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5789527946419284" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.011164814337137896" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9851607581927566" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9776200077867334" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.21403255347995098" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6317132027907844"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.336440295616929" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4719783734852825">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05842293800328746">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.4593502300278678">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.6487909394566054">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8923753760501272"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6539032333595078"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.1491643661775497"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20815309323430675"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7851645771418536"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8217450594903721"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7526199649852838"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7820932691704106"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6560105902257982"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.21556250420713896"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.05064816594013655"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.22769606186564584"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6515477376356336"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6821661228962139"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9187028274640923"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6689227738766912"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7548611765672262"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9888979900430197"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.4735421264430113"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
