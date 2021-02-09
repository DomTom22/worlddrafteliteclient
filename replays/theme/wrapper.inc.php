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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.21292857204840954" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6179161069487908" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9964057615614301" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7004438426442072" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.07049588779064009" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6136873049081386" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7649621128845321"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6780978382338128" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15230098773891765">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9760973986906418">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6012478205224829">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5148268806540666">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.031012072141864522"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07562632458510721"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9403741229617035"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7028040066559493"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.17588882815016538"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16789957326320182"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.49173766100827754"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.506286005726321"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2031584719575137"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9331925341324043"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.12967026039764273"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.21696066500858047"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7005025921034906"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.44094252039077064"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9025640658722491"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.35122857150734843"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4526220323664003"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3706497498058632"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5476116691966035"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
