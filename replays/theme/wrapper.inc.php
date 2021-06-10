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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.4709610660126746" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.5647363999982011" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.28439267017522574" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.5020109828851911" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9263140137421837" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.6461676102083764" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.724719756193339"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.12600746596227674" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.47050736924275816">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8744601644241263">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.3411519457483563">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.7480160258503106">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13204393251649638"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.13130220732467857"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.4996902345357497"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3767547896233683"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.13098946123542388"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08960584879206368"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.804700371562167"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6750851218288572"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.9189499065156161"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8684309244917132"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.39793936200737945"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.2466850898503825"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.8826572573969262"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8588725351954674"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.5110304024860792"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.2027725479078628"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9074140011618219"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.22674988287420406"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.5227647235507145"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
