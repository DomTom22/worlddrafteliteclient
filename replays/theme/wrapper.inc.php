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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9727259730169819" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.10395868689045318" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7391833507626295" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.707476028582066" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.11205125811347139" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5747139726634218" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.913288879328515"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.0507569862882995" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2714273483999674">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1801739221517642">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8945253564089282">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.2383218965891376">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2954134430573214"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9435138139683268"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.42572997083850805"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7711531334147756"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.05279751311649261"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7313659730512072"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.21471434844933301"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5052497445522239"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6408096643350005"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6024534401629449"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.22824263775051468"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2587684255168665"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.21115664316830451"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.33393146158103826"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.17497984307124104"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0005678504584876176"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6621797706080135"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3857204667864136"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.573079389314896"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
