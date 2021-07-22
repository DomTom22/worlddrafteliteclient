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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8524517515030297" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.07907458693399017" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.7771606486932918" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.18964789913765334" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.2673618430443092" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.9452911042675662" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.9438094217665458"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.20980777863236622" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44206746901135974">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8322153769305518">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5474262423871765">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.11564341406269762">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9144646505101046"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8616472683279839"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.7937924851345326"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5627157127878011"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7579771993646209"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.01152209237600954"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.90841366744368"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.3243717818779892"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5465537535153868"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.28020198613336667"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9604126482961353"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9515289375303038"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.36301438260941654"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.1779106273065636"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9274868499686604"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.28965002799426554"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.6313319238105177"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9362324495248435"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.41631950653728755"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
