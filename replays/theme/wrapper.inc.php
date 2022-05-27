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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.008111137774824417" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5629125144742655" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.40318119024995513" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.10941468700010692" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.5545506434341567" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.2657513422847251" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.4690526360299272"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22896766966400728" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20323115146425708">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5348611504159255">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.11242492505314017">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.26102743622632785">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7883456460048908"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9141819928848203"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.4063479061308801"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7897290327424702"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.08646127025672201"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9885473405463736"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.785434619584356"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7535070129206491"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6484473571022862"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5905175142859493"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.6728126542037187"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.4190361873856847"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.38248832829803403"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3415465791488834"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.38413361684767744"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9822749860164282"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.3465760655702901"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.2739847777063895"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8310059058242878"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
