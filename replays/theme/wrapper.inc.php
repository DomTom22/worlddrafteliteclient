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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6737843208621364" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.8087839874746214" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.6753291858244141" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.032938172809247046" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.2884900483019579" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.3464112398697945" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.21662535052900744"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1843668524674562" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42493289176128735">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6976923874483021">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.28115243914798227">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.9780010055916393">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6029404588003724"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9336004923175765"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.07563774568367188"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.787157203012296"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.047748784954722456"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6191795297064548"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6805984063543356"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6169169756310842"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.15688384882449813"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8580743588633435"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.10410868057429057"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.8159253680715015"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.07732568380988392"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3552003622861064"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.4529941355917546"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.4358499378628078"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.03239441857976266"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4539746138893961"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8523188411727558"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
