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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3060160716335101" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.3896030123111971" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.6824629918554002" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.16385780506621117" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6462600390486779" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.2821409426287318" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.595638806554359"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6872567533024323" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26105111342601406">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8944288538133129">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9526608389800477">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.1998726298080502">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.42184706554148366"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7776990680787628"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.4765248098787218"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.015613167120424265"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7027671085270999"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8251862987681451"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.09739249582598553"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6611021025678887"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.722029809385055"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.27726344348362364"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7334148017346478"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.546269352961861"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.33766763210615025"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.983977216435368"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9865179439523986"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.16582562639463005"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5447005469157573"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.23412926258839262"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8100187181328322"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
