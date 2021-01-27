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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.647328105286691" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8312726259611702" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4283291235910953" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1427129050138929" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.41396786311776057" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4995620486196495" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7411095703206483"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.529688986840062" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6360004660384238">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06360247219172765">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5502689174729227">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.17412789912082682">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9839057157162721"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.25927943972569856"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9820806099612851"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9788453893784319"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8123874431560221"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6785896536113445"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2865408859690741"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7244052130561138"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7312238566103435"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8779182298983192"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.22102515544148393"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6538775560016878"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8197442657166465"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.63287697207537"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.13644687141808953"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4727921457428046"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.511635523806824"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2518382945752997"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8761748237564988"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
