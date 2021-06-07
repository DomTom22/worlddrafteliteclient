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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.39597661920397864" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.291937185169028" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.1119001150504455" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.5628353087464277" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.069509817977907" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9969488973271625" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.15860805214027374"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5197270301545986" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9933326634873607">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1054969282235827">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5097669846339843">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.778640195184297">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.40342630565681437"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.6325104245886515"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.40174849352178277"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.14228426075731448"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.3950927441777423"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8118171163867924"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7889445289327088"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8267366688496289"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.21603669835056505"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.3141350394589102"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.600695609526307"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.25104505284992795"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.9830547730275929"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.18140072636945836"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.5622733059143685"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.5678543079990639"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.43950455550762135"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9848207373888616"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8536911411605261"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
