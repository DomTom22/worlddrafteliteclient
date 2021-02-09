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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.24458560202932" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6731434039707132" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.015404888079184387" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1730218547923934" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.29251353691602744" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6469210103199219" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.10908603136305706"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8633896575608415" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.72033446959836">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.41399920573738824">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4454016255216646">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3914453386310175">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.794486625737413"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.41317472168018776"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9912265983439266"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9163549535781068"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.44844989739554175"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7847568172696713"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.40173970020347083"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9063436119973756"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7160971432679735"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.94477208635496"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5165368033146067"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7905919251558475"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7326797199479531"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6955876070549163"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8750247850611665"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9585992877645293"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9667740921028654"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3486953207108956"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2634715946770827"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
