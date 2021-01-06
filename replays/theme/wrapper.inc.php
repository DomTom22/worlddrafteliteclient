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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9185304981447775" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8472450082669098" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6003007490299592" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7635120759912604" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3035807718690444" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5460619949881242" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.4960961013521532"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.27222665468116514" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9407554615277631">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3663953434037499">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.882226622082273">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.08610244566647052">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0775891412337153"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7314489775273005"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8234007928238904"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05289857275908849"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.007048948924848197"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9205747730702043"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9038091958632561"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7206858045903521"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3784873783487559"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9342127105677289"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.007215685248814996"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2633790586201834"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.28473115447588593"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0954502913655284"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2562519391410114"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.14364129174524054"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3534051473923654"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.21381429210641545"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.19073025700309798"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
