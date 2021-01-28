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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.30225860204853316" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7305038601271803" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9538803111416299" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9636362462828731" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5538609695077601" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.974736036240706" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9344307908167564"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.11592972794289302" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5969342488308393">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9919345940326327">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2675275957503853">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8199252376600634">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09354323260793795"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.006187412658514635"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16258051990354083"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4519461820477011"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3637546334420405"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8773070342042386"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.029209104807407682"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4939301729305623"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9540153207243502"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.49507581673493095"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7417998571796556"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4770097403215874"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9612627261938413"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.955358680618217"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9517457415980177"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5172800437349969"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.41056753640284493"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.44196910984844795"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7474968020795265"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
