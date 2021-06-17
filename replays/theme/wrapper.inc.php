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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.0721527298818978" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.08322064629378967" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9899833176075621" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.937242392357938" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.5390119084553624" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5898697306732994" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.21455790477983672"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.41493580296376" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.35694980980271196">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3267062171275361">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.857267955187077">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.06575901434413844">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8457564204643928"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.4936061753150396"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9139988790921096"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7500598838751862"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.2154982233528866"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47263998530908724"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.4807291276615382"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.9882485862220092"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.13477690770415807"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.665018970269837"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.30295405033429534"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.29303427632285617"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.2350580965410951"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5233819423391375"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7715812308426537"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.06277231146665718"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9271633889538782"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7738641776682316"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.15809762627828805"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
