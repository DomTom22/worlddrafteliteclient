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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9655798955740178" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.11924416622589495" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.03451906208782596" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5057504880972123" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.46016537975039196" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2532907372268196" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.014687206058371594"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5563282731427894" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7536527278246694">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3625162925038432">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8082629827706576">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.39859938070979894">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18355900333907127"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.16062824517195162"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3066716535856573"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.793396195631138"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.837918201053125"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3468233669785372"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4858002597857547"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.056096096887468194"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6916029169477524"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4627918941722253"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.46000083662439417"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2499687952348444"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.43998744832839853"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5717086629113624"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5966358754179337"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2965847556672585"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4679196647342003"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.03706672291495505"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8844035402232411"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
