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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.4244615540761729" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.5934913640795236" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.6443717925349037" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.13821662239334342" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.5464741049552178" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.35969602529585876" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.9101970488890485"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6486221640878185" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.019424354640132258">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7888576290682117">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.4655216607032422">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.3348823689820577">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5812358513312188"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.06725452108174679"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6270827229390397"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5853460004555964"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8642562518047991"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48018302863735385"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9480408827662281"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.0916809584735736"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.18232152396789214"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3120047403707433"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.07751529788071698"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9414127678751592"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5718467760536472"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6494533741611379"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.2674347685253884"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.30559440518680403"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.26738301582877044"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6453680617242672"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8108799675542646"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
