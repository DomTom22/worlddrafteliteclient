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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7402143837034207" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.23081161388696447" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9339255585750068" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8663480327437632" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9271855202993899" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.355763962273578" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6581248185645618"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6761908971005239" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17290331848812657">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.03666335727616388">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.00818671622475331">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.03749287262943479">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.45036643407837196"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.15925005920636526"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.47720433848297605"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22304384967676572"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5309934340702436"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2230458892583942"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.4874813269078291"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.2972660110310159"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.45420590256433524"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5112380658958233"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9149564637851078"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.2798819763056972"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5047757833461111"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.4646741973304247"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5859609105644665"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.11834895551332636"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.16510768329622993"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.31038588075360174"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9321591311905035"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
