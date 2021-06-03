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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.8336881535176308" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.8267613709226906" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.49741953313938936" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.20410914378665068" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.024190581010563816" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.14206267436205677" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.2621069408305863"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5260394671604345" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6477244349131526">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.02829267283573844">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.4072561015760414">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.9622021434716521">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.696330687180277"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8005532663691379"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.15394870650678572"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6417004241924287"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.5229332479391473"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.006646171290513925"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.01827842032210092"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.9100373899095904"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.21807978838061692"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.284256052184509"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.44005871550800957"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.9278379482646293"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.7119455539562358"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8928409513715485"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8848049269610321"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.38337223428067"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5527269904741414"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6642687643595324"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6704484880038997"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
