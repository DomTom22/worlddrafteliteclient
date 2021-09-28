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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3260213443088442" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.011856961507521246" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.626261346125244" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5159098092869732" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.07879438270867767" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.011903354529103627" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.20237447550082233"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.21823418471628764" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5015721937960029">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2136490945865004">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5533098259244376">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.4603173503474327">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3781603093912975"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.09537363678489985"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.7993194703112327"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9431514915637635"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7426962274823476"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7796403806525223"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.17366496741788007"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.994834194568827"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2056448340835011"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.31881435009907366"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.8374360442884741"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.0014086401278530225"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.37925120776449783"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.47817970585861436"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9801975346951168"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.20016797805454378"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.25007802705924087"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6663900435152661"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.5316875439626543"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
