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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9490150909899786" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.18165000467237902" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9741674834246938" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.09729919538112064" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.657837782935399" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4945506817204046" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.52115670758983"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7026996948189068" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34386198899650466">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9919498069565371">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7576015461332088">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.533180559281133">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5318805881067785"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7426262787977833"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2340303723993018"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6797001566542189"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9640782341086855"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9134860863397709"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7543386062820308"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6144287239536359"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.373647930071775"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7195739126069112"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2081789760156787"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.37738083949540324"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5692853650174712"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.027076836585031794"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5658284460810687"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3919380839850335"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.06485150944773799"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5917067396044013"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7314995809642939"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
