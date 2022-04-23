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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5549598392548272" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5822628267240759" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9926739805397935" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5235655219741671" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.47903049118395" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.14697907540863842" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.16451554983412686"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7130133776042269" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6257871671812403">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.681611027928007">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.054296733658659946">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.05817767115605843">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7764743295371894"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5862558326753506"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.8477578804983665"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8174494050145935"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.13064779769196666"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48315054718436845"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9831304109895984"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7120951666914834"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8068619386378297"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9037797002155799"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.6008811816643027"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.30509891388563903"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.4067876040553495"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9601065907342397"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.2021046496663479"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9550488228175997"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.003790828972749738"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5731775044655718"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.4400515420799387"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
