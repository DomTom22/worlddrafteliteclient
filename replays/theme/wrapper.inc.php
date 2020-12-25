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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8500603917669949" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8318501130050331" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.05776250531232052" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5671345345080037" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7079740962285048" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7637851124546355" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.2904659793155171"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.10451991256016702" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18977503481275315">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09273245833455745">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.26408271710300735">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.3726480059600208">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8145230768635312"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.42814920957995306"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.40363655718713765"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6265217860566874"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.01598689105747164"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.91366461551242"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.34946461977357535"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5603990852349043"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8186029230988525"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3453760177710108"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6699999730921933"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5384266945650564"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.23708154209131393"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.35435532769845435"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5410134701406772"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.24026071153830908"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7925062762215662"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6474671748585052"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3074803508769124"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
