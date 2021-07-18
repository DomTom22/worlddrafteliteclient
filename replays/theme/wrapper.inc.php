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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7194599487060735" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.47971235121878997" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.17997931547067458" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.05655328680426441" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.19100738342346424" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.02613070243209581" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6713729638329244"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9295617642784273" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.043239033419567585">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7762284429353425">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.856342922253035">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.993278490279091">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5568992700115432"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6115052608587277"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.3639984499684574"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.40979321734049856"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6432158432124031"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08400092728071074"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.04316028679758288"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.18405725880432922"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3451964241907455"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9569321292093502"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7375438289758569"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7381836123814833"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.40822749245794765"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8814908516670346"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.34101794585204215"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.691913369935653"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.759304659463786"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9947549765503025"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.5413307800721467"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
