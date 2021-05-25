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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.40867595805103907" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.5052524696100642" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.36266609517246207" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.6321973187593142" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7831847916799242" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9216989885847044" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.2145358423612771"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.2847482664411167" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8274833773527723">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24204071181631948">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5289255870817431">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.04652103105283034">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14588268559544293"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.09168877908201312"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9348432856813924"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.739605935988304"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7411520405352814"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11932612881147397"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8756124093642439"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7646316574438548"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6233923118569924"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.14589827947564338"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9746537521959935"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.39744528820649316"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.0445988882975914"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.9537381655467527"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.25926777586183625"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.08478875633520122"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.04765514836051543"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.22096325507771608"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9590345328351699"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
