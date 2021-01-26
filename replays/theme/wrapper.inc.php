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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.42048587710967666" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8860537937790289" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.0023351357846199683" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2538698477156811" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4545901063914932" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3613263857012161" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6606859570552333"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.7693104975272091" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3122666041085578">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9775405457501258">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.29633295462656206">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9222436386700215">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8572921141521617"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8312263356719001"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.059919000098693775"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4045562427735905"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6602347799402288"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7610776481456121"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.44775332198897244"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3195793486768381"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3315889200659301"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.628102260597621"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9996539409064946"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9030531309768968"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9373518187520262"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.41229526760456303"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.45597981789833786"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4484606310605235"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7566927409568049"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9735497582043584"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8932422232602082"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
