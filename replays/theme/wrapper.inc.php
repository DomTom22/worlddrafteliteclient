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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.0790256753020282" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8785929770743204" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.12111972822770722" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.17393420050990205" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.5020614503887433" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.9494228805649267" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.09077410619415294"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.30878516064945827" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3205672549682781">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6048294938121672">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.7350555010677176">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7593779436356802">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.815318904326982"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8376968822802713"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.06423712835052453"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.792230612040546"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8350416493983577"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.465212393586266"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3162009651709379"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8111706861569772"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7382923524612572"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.23775485831335486"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.3787838077014667"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.847116293834534"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8052726341654761"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5063975562107679"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.773730342083661"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3826143919783618"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.06879731569794845"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5837380760355362"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.511111143123379"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
