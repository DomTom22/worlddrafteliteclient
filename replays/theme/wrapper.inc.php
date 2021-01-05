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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4456539465780567" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5967287237369596" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6528842812227813" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5722202871061388" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.18217934481299003" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.24112325971570692" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.2213331664393996"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.4853181211197404" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.24731689494466025">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11654119133961416">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.5216183248218886">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.13039311451642654">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9276599034546593"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0029637575356835644"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.18786488365499854"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09833802747269305"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.13013101016093298"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3466768715355122"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5755720039433632"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5378016542131565"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.04102838805768383"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2856665598459971"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9063591564311162"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.410818193132229"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7023962973548248"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.08316061631411187"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.0759131563634543"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.41552393719539693"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7650707638447063"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5915878112254171"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7367050536876765"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
