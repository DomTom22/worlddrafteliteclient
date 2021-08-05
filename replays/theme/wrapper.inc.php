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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.9249185189154931" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.8215105991574516" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.11848391632719446" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.20593058722040403" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7478508453643391" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7550210107832633" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.5013692371497698"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3463295817957426" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6085533216737469">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10370073930136359">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.5472288193731709">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.5148097375964149">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6474108297280925"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7668324570278717"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.870411961865039"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8620800702724003"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7024964921672034"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3056502497504936"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5938494680143338"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.18007671466414088"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9042622229951902"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8050200973840718"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.16962277983114515"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7377384126406528"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8992183737053496"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.013558787104526404"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.31878575161722433"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9177111052200912"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.6340617058548308"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7102345216245196"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8417154257086965"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
