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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.05932664944883026" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8341008369042859" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.6440100066430607" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8425746741281077" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7516384958370801" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8725473622449753" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.29086617625235034"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.48143946290406614" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33559851563854437">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2623782670079513">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.569542351672655">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8206062321361749">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8693667190677268"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.2991712391593335"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6354426372358457"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9957043011021365"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.024219912697481805"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6778633992020411"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.35691713583500495"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6562049766869831"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5638896734318157"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9427246781713308"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7654053731764539"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3932533664840676"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5807330850355201"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.4100753781320339"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.0333241172334946"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9857102167642313"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.813390987420368"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.21232594280272998"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.4140983281589594"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
