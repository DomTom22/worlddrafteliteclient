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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.3703396878831846" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.05979860237156931" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5442734783678953" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.13053949430511658" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.3812209124033392" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.1580591688580768" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.04485872509185085"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6286737341390478" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6935624005382433">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3055476393889982">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.3750102071603896">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8619428810501075">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8418763182954223"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5521522194405974"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5333323266035506"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31128958350928526"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.28259212497378616"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7379638827631616"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6445613288038083"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.9257178255667275"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.188587603037927"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.7478728759022568"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.8949966925085371"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.2777993816269566"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.4754367897789129"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6955271422155807"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.4320721203185518"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.47744091165743385"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8993892607313942"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.12453490677220858"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9182673780236723"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
