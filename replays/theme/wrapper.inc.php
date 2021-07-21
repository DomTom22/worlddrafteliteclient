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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7390100737709446" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.3501312337121165" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9774063968703544" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4996784760146591" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6683185318453095" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.990605731211402" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.012214104497444422"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9659062670507246" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.31189998785887774">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9527200811865388">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.45822892033169405">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.10463388095741832">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23133138788315755"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6962558719315144"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9561293710757741"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.242936548209417"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.16964458003397964"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2882932855597542"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8431790720112624"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.18859275352009552"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.15186342666492036"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8841561027786498"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9249234388100998"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.305228501901569"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.20390291085293621"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8315453151910073"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7017269523181293"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.32571389719220245"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.1278911533164917"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6530426540147234"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8852019780541625"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
