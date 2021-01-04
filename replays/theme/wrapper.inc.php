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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9519348054688397" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.664147716228612" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7072006374353297" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.29934422098325353" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.09294401778898287" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.014862936289975925" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.7275384283763926"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.22413772370907892" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5083438164955536">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4218466061824637">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.9419459220950683">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.44124673780012147">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.838748972598905"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9395888255776068"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6506354215684675"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9461540748305008"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.010630886128087491"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6602290093636545"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7165352240317575"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3501433468353461"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2977207465942122"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9531041264621709"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.02819189102960795"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7193177104572488"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.04610391933153668"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6511653761169509"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.041513401955801"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3760244605676699"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3883794590644787"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3672273592918083"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.27511137491801896"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
