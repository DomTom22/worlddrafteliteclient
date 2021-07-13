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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3230628734319585" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.1596418286877288" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.48056268758298737" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.09190395678032837" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.30292739023159165" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.07183245215869705" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8663902888744426"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6816382863760473" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.38059426231939186">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9851906537740764">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.08473080812008327">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.9075775154977612">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.36005170726966607"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.34300933950810486"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9304107305584683"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43027756725296773"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.553908235286829"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9790910600268199"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7362231961751333"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.26262939251163364"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9246773812727016"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.576436189987388"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.4652128258002646"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9557674006286736"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.659584304055624"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.058462777409522104"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5353601198310238"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9158760819349252"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.18747154461304372"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.17488907710706303"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8632724135037462"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
