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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8634801503176175" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.25842033858029856" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.17495831282670182" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7273014582999506" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9096527687019558" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8746382654772944" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8152305965880053"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.34720794470946625" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20460030259077744">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8331958920722748">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.9694479820340305">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9912582415324949">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14286424288801736"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5620762513527773"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1514911119569462"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2440838326296415"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.38600939251380284"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.45884122413455763"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8544462682255793"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6560508051057214"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.21374908646694424"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5429009328099006"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.704342726640538"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1667685601951765"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8946720938982062"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7814908063588546"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9404622156958307"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.44616333161360067"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8097607259293853"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5787719680547583"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.41147913885745324"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
