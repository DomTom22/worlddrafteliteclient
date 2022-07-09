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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3784524732304435" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.9666064674419963" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5819343344340553" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.27849294466661556" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6979482626159328" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.2650330915323822" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5733045803825103"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3804939614879457" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9862532689430341">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.801505483796386">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.07490576918906111">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.9014679457841734">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9375036982452865"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.45629100596457217"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.20797022522772446"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12327448953192222"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.959720477002145"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32015761537237575"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6186791929148152"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7460051111089288"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5479451030801361"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3540374525441199"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.947639243902846"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.2664645817369502"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6779391891947091"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3752273962399644"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6735378959839922"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3011700517872724"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.048733940835764766"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.011463792790457505"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.36302677657258675"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
