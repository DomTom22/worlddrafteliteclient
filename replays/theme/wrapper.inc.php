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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6541583149391768" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.14495982433407328" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.44011878350491274" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.14380639111889715" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4376291206349199" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.38874402239998096" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.708103734437008"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5755557145840191" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7592511048124146">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8052826668989665">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6710575407836195">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9565985878270704">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39746024952560566"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.19945855547063207"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.20856444715913813"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5116893670453755"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.47699687514663736"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3099242112169347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.32962076420036013"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7212601469686559"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9152365953378006"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6914290058942338"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6827770422821378"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.09908294984515398"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9541325885032468"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.83419897806367"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9820637528983949"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7642910393443807"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6111036113893635"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4641432953284055"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5644244527743085"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
