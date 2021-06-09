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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6446548544257491" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.4527811892245084" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9024054044367593" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.9790999210881439" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6402607850221724" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.17099922268401557" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.08734507786494361"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.8439696904185812" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.30418139861450944">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1388489857115569">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5954409792241835">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.47750958886722694">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.30124732074587257"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5010945458911507"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6382340706078962"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8780277687520306"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.08107296721607393"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.45616823469814105"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.59504449010028"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.06304728830593387"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.07246894900548995"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.13399995904795392"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.41237489568083885"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.4457682640082754"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.38909107078471483"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.9945195834706873"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.21353026277581044"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.11746142344902344"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.669028939674658"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.2322679227822504"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9315515152610696"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
