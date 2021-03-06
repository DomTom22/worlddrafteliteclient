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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4803513923552605" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7135073900637146" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9157328783716903" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5370998185724298" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.280730622267356" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.64806144464379" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7586083561454153"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4866632350144149" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15154190008424018">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8381239831540144">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.0948481448062346">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4639184139878185">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.254962466543728"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9335443794165832"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6456440738134155"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6252208853737891"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7864033934150627"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.30644096768285034"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6383004357425797"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9137085699439542"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.975098931782372"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.20187188866329953"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.09793875511800487"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.07173779275421155"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5290958342325027"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.41676712018453177"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2454229384158262"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7049156278667796"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9038342748549137"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8533934994541263"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8302988901709272"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
