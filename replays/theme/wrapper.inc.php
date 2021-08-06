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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.14546694564289453" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.7045329098419582" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.5159096817732669" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.42266301647271365" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8917930184069611" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6557646019489096" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.6733530684364295"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8355096422076103" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2675067474925108">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9272094353900107">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.9689001223001166">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.32792583417669796">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8113232125935002"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8686896870534526"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.992413513301168"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9933984121961921"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7535898390539726"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7716957308182277"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9373030562811602"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9896756220363907"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3349515530701239"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.29861913834993836"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7730370593069582"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9124132841900681"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.21882046221187545"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.01942477628126582"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.29381757592299396"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.2938751005383773"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5859426958715079"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4111370688680789"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.1968508721997635"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
