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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8906145612293186" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.631626262351648" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.13017718639179887" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5900012366093581" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7180835015843874" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.33827656054809907" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2560671124391909"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9651764482279215" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.936804455374622">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1665513750135068">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7216449369674123">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9194211332392348">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9000743280812078"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.451556383947489"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7606717754558747"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6388640490741921"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.38763570880804976"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23165857605108586"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.29510165191099613"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1459925573322851"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3375387455976948"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1203499352419437"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9252551367864164"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.778495336580397"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3887198307016624"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.12714022596683727"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4977346939936951"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7959624026622669"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.37882528655848513"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.31948506597667103"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1309795457428673"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
