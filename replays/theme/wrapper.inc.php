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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.40426271509439604" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.43391721803540717" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5534897473870979" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.8306037439155101" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.08604256020996992" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.3506818541258707" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.7654203829335646"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.007433129393918048" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4502231708393527">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6426775260484496">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.6142524829931344">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.430372874990691">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9164435982515442"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.608309760243321"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6241074720810884"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2888782385496098"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8075553293128086"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.022736014147726413"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9161166110699153"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8536165011218111"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.11306681341722147"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.7752786875055835"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.8402578893911907"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8908188293848229"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.41778067959992127"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.09986431497950621"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6000435254524346"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.7756691307854902"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.22367064948120774"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.25181600435330753"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.5093200185066193"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
