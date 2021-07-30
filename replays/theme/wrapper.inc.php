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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5748067082964328" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.9121107071897454" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.6968990307093101" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.18850975281008253" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.466609234612688" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5002697441378898" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.1727578469358253"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2635039013637053" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.29674305241914256">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8963766014117887">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.3928568112271582">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.1602383446580542">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6067203091315723"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.11759265340095237"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.1482238325865315"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27440911430451176"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.009394810378243301"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14534168011801407"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.14142263094069296"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.28806081821495044"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2504621956402395"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5068663993768829"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9858818341692055"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.4315799567248719"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.4734048746458981"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.45846502579107473"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8745724947930611"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3827451221983267"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.29055046498560544"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.3202574823051756"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.1763803021652326"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
