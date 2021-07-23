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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.9992027764367677" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.3180186016848987" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9951467888382546" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.31465649565028597" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9471677971112258" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.522122997494636" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.9441708952169292"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0515766707993599" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.345522718950384">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.042702838630629625">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.6801722033511997">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7604464769203634">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9653305540205992"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8848882723749134"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5965934457158073"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6574947621629559"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9758050186311027"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7683704594020206"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.27511769303911215"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9295789520935107"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2375397194879052"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8263210070984668"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.571115909818106"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.03728190446792157"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.1543941182207702"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.4096107812679748"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.41989685787919506"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7164187081019291"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.060404637565913966"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9288883609013283"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6736047634842701"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
