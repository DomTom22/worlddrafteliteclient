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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.024727816100197142" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.4639712123549804" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.3275658056540802" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.31859820548969986" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.46094411068147756" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.3790748447733514" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.24542154830234364"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.21206169275954712" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5115695644279001">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9412646611626143">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8653232676541334">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.981778006139741">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0987819729376429"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.1154222486369827"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7500842533773835"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.180672639881176"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8156943612632774"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9329216555968056"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8514507897091239"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.4346813375232512"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.5585754179655587"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.507294938157308"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5765809550540568"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.10822737679718064"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.7087687539744767"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8475946738594031"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.7904636449271518"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.11520946764803486"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.09448073014577107"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.5243567840325352"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.11721020940409721"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
