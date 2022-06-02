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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.9322876237322553" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5119683513067006" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.18325880324123878" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.02507396580994281" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7569330824907912" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7372068739870739" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6794552582126845"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.35872379439396185" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.43644626141598764">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5143824479330936">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9728154042358621">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8887837646245138">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09893667878143031"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9475690164965747"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.30612273775922816"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.392519694144714"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.17421925381418624"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5236112842954863"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.1902863505021044"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.37303637422687186"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.4631450294278858"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5203096479471321"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.2663790842393463"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.1446078885474933"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8836786165131598"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3923067615024973"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6049634351080988"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.2721701539637382"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.2901089886270951"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5145481286182205"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.2670849029131115"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
