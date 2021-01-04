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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.18383281879976643" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5411943145104561" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.10241064415430823" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6373663188825891" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6881041569761355" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.04476715273675258" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.718671566182405"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.11432154560215935" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.43494174159232224">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08346931974390559">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6130798938476796">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6401056248892134">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5648085697183622"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.939651580424915"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.04144542409324159"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9462308921745708"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6642225173602159"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.39667048944524885"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5986694501558507"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5077647553752371"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.09557521379822842"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2907705101622724"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.19890610918055862"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14092747708403097"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.952853905543412"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7492491492071762"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6046285437918792"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2680156685430226"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.29518980801665484"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.40793912456790826"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9429216173528205"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
