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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8206064823881183" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8527116701148303" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9683856962657287" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7906789666934146" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.460115108777162" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6113405391287956" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.06762313471155057"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8198233079471742" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9874575419128979">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6653526459148187">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9152557537028188">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.25327622927608395">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7566065095164087"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.04482299560826597"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5920207934827466"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11030870712846008"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.38139032296217357"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14874033422549848"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3260903455295121"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.1302349959703304"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.11755411895412671"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3160346074303748"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.03667453285747424"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.4123068079515586"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9497873279215385"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8899254172499187"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8004622292291554"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9510669541782117"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.16778625054233376"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.36169499395591"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.2205937272318479"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
