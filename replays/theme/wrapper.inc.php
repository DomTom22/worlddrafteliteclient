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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.07417800891990844" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.033439101514861624" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.21528949469046732" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.04898037906176689" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6352300164485225" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5877881312890878" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.7524284070679597"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.48847999233703754" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4972209645705086">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.27346006234735665">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.08002426345184599">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.7989042545556715">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1161181653169665"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5691926779907324"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8546910689951339"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4705029963685359"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.16026968309748635"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8148574242074655"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5894407553004881"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8713594197445498"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5938210272879338"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6305338025545448"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9281580247731067"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.421713370371694"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.696720266806854"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2432703859807437"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3193645318300191"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6897822465153787"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8120888689030668"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8229468678401104"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6293393058399837"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
