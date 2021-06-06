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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.29370498044725757" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.106520073554347" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.97318573730856" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.517878699563133" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.1928027034350348" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.7308482000675172" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.4016256241956193"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.9004220046523506" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8679265223378181">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23203313529116532">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5202479811712439">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6783841940973039">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.36095612723855464"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.21035954546721092"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9087038641398855"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8967696693290639"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8204032030036246"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1826541541762765"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.41747612789973787"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.5498875122731632"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.639097246110915"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.04541184240684126"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.36026882566735585"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8130696451988899"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.018205110315817175"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.9379116467149662"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.5693132155812886"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.17166153077831492"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8970813005794567"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.2266750281308192"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8420295753447717"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
