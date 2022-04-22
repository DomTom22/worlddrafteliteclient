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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.9637840395625235" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.9464911316741991" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.26756921435455117" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.49107763707670093" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7130575847163878" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.49112793362172846" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.03333160454429018"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7562584526185183" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7955007565757932">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6566561023452024">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8423341159294313">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.05221789465520832">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6926821971699164"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8443261851355488"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.19309906293455104"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7520036891948401"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.10884796557489507"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9249929448453589"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3389532127566446"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.65982378408738"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.4223689521017311"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7503387950641769"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7367124635185087"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.4914969212213993"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9514020917794779"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.661169785597872"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.15541034798240783"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.732931042634942"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4383737949259179"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9998959546816624"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.01531082958402008"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
