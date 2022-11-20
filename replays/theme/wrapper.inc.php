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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.2526160739473773" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.2744348689145557" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.8999286743557331" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.756549284585178" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.3589034658753303" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.920006089745413" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.4872104883490318"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5133614634827723" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9537284429926018">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6957204068724263">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.37698771373710027">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8084839714580927">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7234507907684198"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5357898468598856"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.813872203355247"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9901440907457439"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.30905287072159293"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.710073116997596"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8969345238377975"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.4383541496591219"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.41585326188836746"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8942455047216062"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5505245935482281"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.07924383706095117"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5170446769247588"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8164708917323396"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5712283586128255"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.17968755085911714"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8203398502620416"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9823498760724492"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.4476360510503872"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
