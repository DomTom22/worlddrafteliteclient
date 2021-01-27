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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2737521618357721" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8439520400914158" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9326227236773641" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7801495722862621" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5533617310551673" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1815102567955853" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6560148020192742"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.22417815816171527" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.012446238537059617">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9664987088771744">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6739379580914149">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8308501911123181">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.756561723355055"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9505998968490352"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1275398816558908"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21159993384202247"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3651054259291455"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5564340228132008"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8756693839937852"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.08679788950029121"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1382349531351834"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7552465144780176"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.005347477000289702"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.980193642383244"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6474023303305707"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.13926750280182665"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.0640065178628817"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.04845991713674125"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.007738604207158106"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.05505371257629954"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7748059973719161"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
