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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.42003822382082845" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.12938020790626226" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7028717964275089" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8238890469552129" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.11378711282319798" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4228930042765089" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.7997244288436918"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.38692233150696564" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4292908619713438">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7058255348159299">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7896348328560259">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.13468186414641936">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9921776156992235"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.17831694434353929"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9155247481663451"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8846266444588629"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9041877907328468"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5413549615041275"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.754470786447522"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.15212993941369346"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.018976317279919108"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2613630745381441"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.17813556439336398"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5115801009890537"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4965870158278507"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7725514434626672"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5671570505161636"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.030875602306926764"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3241970260434788"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08246114851115172"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.911020241143004"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
