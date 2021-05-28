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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.12843691247094546" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.501504435715437" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.8837825370654218" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.8965289033363932" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9683349059663551" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9652544136565677" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.409821797199063"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.9423747578690191" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3534816222543593">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6152994887791898">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.3686055660456091">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.021558734755822373">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2975660674080094"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.887787064042088"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6677516724937005"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4242186719465755"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.6993020127652692"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2513588218817977"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5057867104901315"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.582502285128724"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.020970710196241305"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.11456019295122877"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.2861185451958732"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.03919438942886533"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.4147293759090318"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5626755879068313"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.026456473812810577"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.4356846778083858"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.4310780796655018"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.46954911663212306"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.23145260530700917"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
