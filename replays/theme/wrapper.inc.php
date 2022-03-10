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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.07660140262446724" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.9214127643902541" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.1899924021540269" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.07919762237865302" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6148398786375184" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5750631215478024" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5701157597985644"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7365064315088374" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5202054569173065">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.17707062743122703">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.4786973981882945">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.36355484035206875">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9567955524737057"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7626045247802413"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.2741671138888524"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5528105537257539"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.31900782603989475"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24168001205602874"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8990014243463649"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8826740058371554"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9750921718327368"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7317490145699477"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.28945494109551273"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.10476027969655055"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9406233579005692"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9438312181805029"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.752600760184893"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5474983142273429"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8939325401339444"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7900770468155767"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.49890724622454585"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
