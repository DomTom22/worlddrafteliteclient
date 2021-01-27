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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1395226043277369" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5597200917498404" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.08477338836737447" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3310080535135955" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.768479290280847" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5648810866327567" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.369746570709361"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.15654050100571348" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4428451098115751">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13892954348838438">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5442045748322508">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6644232286342842">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.605852571487832"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.09556259655859023"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.47560024013958024"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.020580457965192922"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4664802606845584"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49725545076144173"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.33360914757951377"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.865204687851149"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.40334939181189133"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8804065414549704"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.12642379407538606"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4690448908007603"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.0741203179199812"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4451205856631093"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.42686892221826955"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.08640707035906181"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.45460451358171183"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3157384631526645"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.18319952968694597"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
