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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6541542124587305" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9673432016656462" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.25339890273519305" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.44867155218064037" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9756453986067237" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8246916942325491" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3477008882325847"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8547138352056571" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.30883679388311713">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21636922780243517">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.24582961504819711">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8451211237490286">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4985426185146866"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4641049882454866"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8682263899463121"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6527605129240639"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9693166620460985"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5212637010551264"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7881644612965695"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.874514052332739"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9232718918911089"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.012354277340046682"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9899818981597124"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6101365547934108"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.009656952298063404"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.29313061631521387"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8980816214369909"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.814910232321532"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.41434197100002423"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7447463293361456"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6675314299479724"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
