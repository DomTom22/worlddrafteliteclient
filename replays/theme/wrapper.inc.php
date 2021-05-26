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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7738091690013076" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.28941753429626726" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.872283974315631" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.41882753296756703" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.4616410445160495" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.6618979817221167" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5033187118918918"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.1936445349019711" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0994773694488873">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5657789372837554">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.778614438580407">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.9609112304093042">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7894905771555987"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5629018172476219"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.2959675871588676"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8883435990224835"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.4398242049918617"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6491104615242753"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7976154212458837"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6734844178241766"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.8646198199393691"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.02983849803699945"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9172371850084213"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8570312513427352"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.3775558849191629"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8977255067164658"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7639162870592604"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.026644960314039956"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5043169578288547"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8451585022645793"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.0687829595359104"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
