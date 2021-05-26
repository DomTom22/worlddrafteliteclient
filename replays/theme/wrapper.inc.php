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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6097367049049123" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.7178234607287763" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.17799067789049805" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.4210658006362673" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9241129955202292" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5767555334575649" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.014793454198896105"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5775228756083584" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4252921327983128">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9957324275443851">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.7342711881771644">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6744284526031743">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13095143011087207"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9718610597392099"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9706859743226228"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05935955770691814"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.32652707624206334"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5621363908529893"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.464392026241339"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.4449911754941487"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.060128811943384486"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.1066375252608831"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.4226632677521154"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.5447915773993257"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.7753446256835075"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6166934747383312"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.22104422897442655"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.45433495241533994"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6243717461182192"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.665011674936703"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.10929443597391941"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
