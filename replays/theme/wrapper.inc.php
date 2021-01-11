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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.35051558357359136" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5985833587107936" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.21249830298171735" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.670238497110603" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8115581656757169" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.19931868804309327" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.29480012866532257"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8571972414209956" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3700661429714778">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24324628502791756">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.3305408006556756">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.2769422737159475">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3797574580169394"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.12271633405223681"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4694916039829571"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.74085388842359"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3591419003948344"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8698743846767183"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5235674396543135"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.25410462622993335"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.04760703964369517"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6288155232774877"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9739215772266236"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.16992824625168246"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.619449650997351"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5990832058195432"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.033522374631808516"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8480078321266133"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7611990065170058"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7764857844689661"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8022143585983215"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
