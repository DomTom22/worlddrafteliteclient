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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.12355641897747227" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.45935537242845204" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.06525808319157278" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.9775626209687478" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9252474336685346" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.25668565517596353" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.0436158954418977"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6139404586126105" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9306489789124952">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8864951813108191">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.6284613218968702">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.35026503900251815">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8952621353814001"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.17075366862220664"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5756063897932997"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4232550657877596"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8261794059080843"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14564962432469808"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5986135527345116"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.5046373891387044"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.9050706623310094"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.41406882396591205"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7671845303060372"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.609856032987522"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.9651980024912752"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.019789031751090702"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.02558707657491799"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.2820555324013896"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.46803870490350796"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8736797423567764"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6103372817294699"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
