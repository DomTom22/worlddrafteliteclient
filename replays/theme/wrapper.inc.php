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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.19799234059144366" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6107244002670171" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.32074594354344144" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5318285554558699" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.46966488752892865" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2763976710259093" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.09106006180379511"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.614625191706085" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7089811858753208">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14466632026431903">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.48235200859963">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8660419600918481">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.633795263507164"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15914241563806142"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.10446447891363375"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9099488085810152"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5081451462356015"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.305115001733798"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5234626876336403"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7282198008349074"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7777290323067205"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6674898674627925"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.823307007197712"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8828324797319862"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8203391892690761"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.012568020827989024"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4476902054987908"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6574849905385658"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5474492716292834"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8531411877232455"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.12482610797160598"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
