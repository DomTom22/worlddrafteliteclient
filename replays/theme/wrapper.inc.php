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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5737462893166414" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.5500327692333378" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.2697079606084605" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.798775913997068" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.201380578326118" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9827908298055412" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.29455095690052446"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.08768602020666205" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9045246516396168">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4350369715295397">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5317317251168434">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6592569721476886">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4592254559199662"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.7934771880607103"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.4930332603865706"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7305837935162964"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.12710939614539196"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5940692441528632"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.46032092593869023"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.11811708845180036"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6500556233827557"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.6901973527391931"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.37492111750192936"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.053888068770894915"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.05716578502879299"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6369932445087267"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.36148440149916117"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.13616703322697354"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.7206710307731394"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.014019560623115046"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6534917487884786"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
