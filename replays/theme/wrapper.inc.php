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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1464987046955608" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9980982986071039" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.05586395613291195" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.09442161483863831" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.025644548676989176" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08606517720357032" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.043958915324923575"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.42704635118272716" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6420341442833877">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9922956484547543">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6477258203271461">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9541228635189685">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.559327348426492"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6829809945313401"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.41887692122748166"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3945956979442298"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7883120514187236"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23459822720201173"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5942799364614799"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.19380969819356775"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.34972666959358456"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8782129924666844"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4537756207860324"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5596941838455709"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.43935651104296736"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3249795045704926"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.854394909900279"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5463873159170187"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2790349825362122"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8210200213959826"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.03049320846666337"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
