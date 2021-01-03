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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9646713452839828" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.710611388053686" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.2542580375615884" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.07082687637808571" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.16668969094961472" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7990267220894125" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.7969595390110726"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.35505072512765046" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6555392971208098">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9581847230402931">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8048177494535211">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6634783235399169">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9548322650351719"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1387965074942492"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11991224127487277"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5559411884324601"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.216829497081249"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9293898736289661"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8444823037167375"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7901896236185699"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.27987901389141934"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5024775328600104"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.20408605934586133"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5322540089786383"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.42975447442411596"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8521204275917611"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.30781197311519315"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.26462350382328914"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8187485769942191"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5492851877249978"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.10286453706987442"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
