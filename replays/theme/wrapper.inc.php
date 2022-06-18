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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.07042650892623614" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8531250114225402" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5769484470722466" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.6382609506576331" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.43247882946346006" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7536557974455" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.3690414354792917"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.002586319227430023" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09048679935593729">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.284513279487419">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.6171357343033339">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7867219579924387">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9629089395077592"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5780614223847771"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.4686424818394288"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6200800513593347"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.988904247260084"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.29369558800470563"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7317743363432601"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8609812464911641"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.07513087430402976"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.11104140581995181"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7271287094116554"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6856203124856237"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.7066837108158719"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.22107912784349915"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.004600233101201612"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9017437544779214"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.40402454166089097"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.29260621004317433"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8427915546474458"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
