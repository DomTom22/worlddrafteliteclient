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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5193669012699138" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.994421766638913" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.28227391193730256" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.2439392249286867" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.24415949391698843" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8762833926155777" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.32218844289258963"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6360898096909009" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3986670480286023">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2458715411645367">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.6951949489412319">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.860145846025085">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11102896260602257"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.13355146461786416"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.7113062777866408"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7084981358060436"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9417715009474756"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5668480197984709"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.00020711125170191913"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.34305581765449067"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5337498036622821"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7266606564941425"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9049427309363951"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.13466066114242947"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.05681011609013442"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7626351042674655"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.48857804417641937"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.08061595752246031"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.3157687454481717"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.3354338489804942"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.30642608342387456"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
