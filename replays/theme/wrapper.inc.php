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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6092570780177788" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5750513142138345" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.8992614666843657" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8012413643836143" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.740426491319071" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.38449455191712967" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.34610873808618625"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.37308995680068713" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3069609746102826">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5642866498732513">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9210565337777628">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.9633707465254813">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9036279888842675"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.07141220733186193"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.2988141446318482"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5073360054956151"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.22852134291299664"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3725464214802807"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.018479511789877945"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.1447816486259228"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6639666000025808"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6265446155096293"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5433384787842404"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3146583419009388"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.1540731177164063"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6046619327808225"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.331423987347357"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9169490508182274"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.41437540410289286"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5287847556021292"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.2608240468250249"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
