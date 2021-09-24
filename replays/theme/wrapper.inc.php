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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6092339410423979" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.7268450516468319" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.24467219378587313" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.0892196383338808" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.914264411885374" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.047102921097938566" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.504397440300804"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.05890828474733634" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8651065022048985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6152496709881505">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9509292484847762">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.6652764998118612">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9381196094166244"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5152759372979743"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5537806740124782"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6472138965078085"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.02602317126410658"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7929362552153261"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9049964155875951"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.32524579673803733"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.15267355180425501"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9590365299182151"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.0600732406427007"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.000021455290182492703"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.21962979032876406"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5624578854875528"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6815420509033525"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9572878873813557"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.2905403454963973"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.16581518436311904"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.84491797926373"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
