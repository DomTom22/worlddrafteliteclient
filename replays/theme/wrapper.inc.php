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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8495442384889984" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6327461151634541" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.21661440280908528" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7008562264467715" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.22372552628993625" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5397483110463395" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6063329169157521"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5340860605602258" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07884133219980449">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9464132109992793">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.07023763266207217">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8097483129112013">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.976219791615851"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.22059071755684112"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.898467559164948"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8714936978122076"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.11004413905908961"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5823331280303525"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.15018399771749813"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5386027370118016"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7079914932493447"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9196412375653555"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.14642220510124893"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6636920459307629"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8869655651728756"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3482927176483446"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6082871116258537"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.23955559719411879"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5786546705236519"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5722239292447671"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.22625973806834576"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
