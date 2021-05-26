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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6123716192430866" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.14625609324831967" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.8618271821569641" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7657677223189159" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.08218599000934135" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.23958145656458796" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.10198965029300311"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.170329576744507" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7787933307111057">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5848125784877376">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8234766126403008">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.9654955492943535">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.835056774383242"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9214998227753903"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5080030840714196"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.44870210960837675"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.28174420862753125"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.42343298652895456"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5198261296995428"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.9981795656450412"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.010616000822486926"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.9984889042744829"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9196755989776224"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6610089232068437"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.8916451512391681"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.1319333821074793"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.08698616351536947"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.9721358788067755"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5586816527009655"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.0541618438538789"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.11934001573011965"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
