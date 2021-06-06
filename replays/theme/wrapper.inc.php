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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5498638528858217" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.2042249783160326" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.46525595316900503" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.01715377309122479" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.24939409487569852" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.676763247226041" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.36795208447849803"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.3150331544824947" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41529505176886006">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3156943815547508">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5481893675598721">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.1504445048132237">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.45239720913693504"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.6483037400264142"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.279304929848154"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7815154988323607"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.9912353094264177"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5600373421593692"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7196936358867376"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.19952583520983636"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.18865093373983255"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.04371250068643051"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.3118402309174555"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.3270853866697556"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.37234285624946306"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5355455307063135"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.04015634770549914"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.26975271399884493"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.2841423786967818"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.856582860917178"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9924842631002568"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
