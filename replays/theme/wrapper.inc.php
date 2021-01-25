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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5876569406722121" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.4775635102971012" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7036261968634956" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.42036171536522304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5455530081330306" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5717456873536777" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.050129781073243285"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.25579880175958314" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9433767479646076">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4012279316296141">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.5661519802395201">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5299139553417425">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8872086947798614"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9986793525188933"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6409452821200987"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5467930809954997"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8455243071549383"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3427032251887119"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9194857350886199"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.08812709634217519"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9845122107737254"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2343345663879115"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6290590050626192"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7225676933542535"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6054086103325982"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5169050275977665"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.03105427015690787"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9398727953576886"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3928099367329201"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.16668710053086966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6270425238886659"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
