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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.34400560169411953" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.32463200850166785" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6631831688820269" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.022823929341020177" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.5939009432188758" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.6772777069062472" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.33741943679878483"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.3152063692435574" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06357277491416902">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.792775695220215">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.18379413602880645">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.36177619983817144">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6877281384635605"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.2581750967148919"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.3750560964015568"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6957501843731981"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.02280066524901181"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1741350420609986"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9241833415963876"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.985825805161191"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.14679625134917096"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8867032803645183"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.30843800754363215"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.79221086519321"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5752865185461917"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5253858417057538"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.9915530574147977"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.07709579546182477"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8945624881464207"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.2770268546114547"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.25502739968964727"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
