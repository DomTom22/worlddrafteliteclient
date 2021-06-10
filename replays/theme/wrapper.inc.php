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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.8140391625337529" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.6284867166469719" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.8849027836851842" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.4049457487542085" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.030015052552989196" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5634635613432881" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.2541305826140148"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.2004141670179891" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8202459382509772">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.029039251550046608">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.08421525503936955">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.7282402108208317">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07972404153098345"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.7146562454124212"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7470858236086435"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1589255487159471"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.08468788967011065"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1103675520286167"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.270614778928697"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.192566920206805"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.5079513741697046"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.24649614671772913"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.1835242006498654"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.5635051138833216"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.0873459171975528"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.1407019654740942"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.11148955618372303"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.2785887121537316"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.2094166792366785"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6106461205612743"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.24622495043119064"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
