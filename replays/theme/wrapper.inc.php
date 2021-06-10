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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7454123757779529" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.485737195848122" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.8968959036583657" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.05179316760336672" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.12464439458640353" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.22941340881561523" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.40602460626416526"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7597436454185336" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11537024007520968">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5193592733753363">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.14641079121653977">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.4453947337072224">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.019658007873970318"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9009085379892072"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6413215731816484"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5259321649483246"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.1826952753105251"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.03373153543468921"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.32225614231865407"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.4493893579761057"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.39300456919531657"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5905650261548916"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.4677813669919393"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.29920776768870794"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.10005213449310912"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6634238943587034"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6866191772519381"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.3067667822327027"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.060450068776544796"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.9463564994324032"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8968813534151405"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
