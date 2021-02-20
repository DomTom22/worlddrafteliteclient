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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.37531687459121543" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5926981808405969" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5192303002184544" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7986913766368935" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.30413031822552594" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5023998027635588" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7284957725658954"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1625222058372029" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07037454931176645">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2885699804187001">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8582407834149925">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.16899510899584103">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.884724506431426"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.09075520840601059"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.08819554924676942"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9612114390942228"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6515210002115512"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7023827894965171"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8544683231651395"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.34446754370224175"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7207038672952764"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7553597846712716"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.31907631850036977"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8217430425215111"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2059971947733632"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5968300691607908"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.05628939071411865"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.436989900423179"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.43645680605181103"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5383904621535778"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7762814913044618"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
