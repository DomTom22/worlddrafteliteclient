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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7989274381291451" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.15457239653441834" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.06978678460554177" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5898944890592326" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.08179385316710497" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5582377971655852" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.7994406626980088"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7569083587806533" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9297544823075363">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9913393045001351">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.0329435000367051">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.28795227225386255">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6668858432110936"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.3611354527476214"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6550529382578778"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1869526897181666"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5706443909878729"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.866797849622867"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6986380802306993"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7139285625811824"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7892108923193741"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8026743762631205"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.019968510796413153"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.019589281355484767"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8208834911821312"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9613700067758788"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.33813481901803133"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.22190482554067437"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9056622430353931"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5230499929481249"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9184631747770562"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
