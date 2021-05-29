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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5417104879424868" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.9559828377942248" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.07169668949116725" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.2153719448307534" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.365093287107763" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.3174476898569203" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.7274664296014342"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.8784197623009973" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7625300408947531">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9715698787147835">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8051253508625291">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8155230164456593">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6196450593336953"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.08283547839438232"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.28192684227842313"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5521625058068198"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7800885451822432"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28223967676171124"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9805617877089006"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.31391893471732635"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.20534200956896353"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.3503657865732557"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.39604568866286494"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8961274445652496"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.14622254920923305"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.05227384595489615"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.12132528005212406"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.8184225279452964"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.27489298993176825"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.23061188162394464"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.4727827330906882"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
