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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.334345310314341" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.438213675278877" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.39333227324843456" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.9427711841541422" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.27267596877619926" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.8170339342870887" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.8569382799454508"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.15488984339700873" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.939515596377452">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6942114115617608">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8189469057059515">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6882108227581685">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.743678197223899"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.725963081974587"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.4621979528667435"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.117344357771898"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8459993232017953"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4407770290555306"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5630781913061629"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.4511098356610459"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.9671723939371104"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.9331729905813799"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.3017247115515773"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.926586545503931"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.4887103871831022"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.20756407316817427"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.1464053901218152"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.45093910543175353"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.22516422703867423"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8033794795601383"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.116066683885792"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
