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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6546620614543934" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.12878901292305667" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.3643038096724909" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9242582997091893" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.618413828108175" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7473027471049649" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.47496144125835693"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9471695668216724" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7539716115764712">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6100524288222016">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.43002285959296027">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.15277002245791182">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04338339068111274"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.765585891898318"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.14180254036009465"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3609515111154922"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5695065156931738"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08745430214820171"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8181590246292039"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.81710065446595"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8896678553975998"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.4256877145180631"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.18915948240485747"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7687009090380221"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6127919445184558"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.991569357809869"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.07281010768757135"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.928355337520927"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.12385903333479997"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9672189976669809"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.5371995427031999"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
