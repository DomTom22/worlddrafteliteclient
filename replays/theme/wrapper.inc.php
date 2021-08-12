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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.08006910036978687" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.980784000888846" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.17625507826730002" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.731709292788788" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8975571931955861" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.042971650879038314" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.4050958796621289"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9234794978355934" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6309052903056735">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08021931042324026">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.07807298328872858">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.48601692687645004">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8272754831112441"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.04076250167593631"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.3945444508709357"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6310999164711575"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.12441526136320546"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5339405792299587"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.4303646056322188"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.28284891646161414"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5597672057490597"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.0061443777356102736"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9484285693947305"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5128940865759262"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8064390122667753"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9632278362586266"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5135297456625039"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3014601733538216"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9067787111126822"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9365556588392541"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.18572952245313878"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
