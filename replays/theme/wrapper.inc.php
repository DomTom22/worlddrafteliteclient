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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.45299500377260427" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7452471385052692" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3629564725946368" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9820072768608705" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8022141954058399" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2978844020890479" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5037190923107084"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.46778651859705156" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.70257464279884">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8073010494410922">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.768079367379424">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6544192645297999">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.42390967145494707"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3574295717075555"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.005133892565416076"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12823968847175715"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.36571627674061813"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.517975804312224"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.03506527189163955"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7986270487646356"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6307312725096181"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1585886802572134"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8149187981327801"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2602965508803512"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8588183270321845"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4090822868758901"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.008344255970951897"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.03115647164428781"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5738390196276588"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7109838887654625"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3235961749218734"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
