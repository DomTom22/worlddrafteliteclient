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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.02364639259129775" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7687764166819628" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.8847109231851127" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.43334749730481037" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.45762955849344733" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7936441678987707" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6753441183399449"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.7920536608638504" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8035111034215066">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09849513985700553">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.2623016348266276">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8677023072693331">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9224747946146752"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.28086286311789066"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.41352209547254737"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.44990245862377387"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8351647626787848"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6096089160684106"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.773976631407082"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5547100101490932"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.845534153440707"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8784744397672519"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4535152076547364"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8130855880954975"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.014705259345827226"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8932395238933306"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.12681028578334352"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3026536152013688"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8914590520917691"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.44745062093778043"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.012483189597139566"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
