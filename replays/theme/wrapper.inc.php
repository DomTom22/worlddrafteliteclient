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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6406035123424365" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5870876692894142" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.957852691645205" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9802380323206248" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9548097828726057" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.05134296590835907" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.027546881828205416"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8197077344844341" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7907863988757751">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7295100248475219">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9795578170844983">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4719534184927603">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5531776023725599"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.03286528454439308"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6641581281779825"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5442488385527533"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.25288145333142786"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5605256876766302"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.09735403544274934"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.07474976996340299"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.045086264734431225"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3932054620256311"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3900750935865418"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6856770110215256"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9288044132212507"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.06610635790797414"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4662662197210876"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6959768336289176"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.0740135719613555"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8951393691796659"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.444476786120674"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
