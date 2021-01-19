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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9362574911256152" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.47487760391139067" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.25140760391413597" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5931835985235674" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7538304438307735" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4530408554050964" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.24618334137803455"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.14950912200174526" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1821018717561389">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07042075454794561">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.018529202860750438">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.591281832151197">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7688501287257028"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9785185647442278"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.697014516330412"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6662889581611453"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9436836137525784"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2009249219757654"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.578808944130947"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5985681109461005"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.16434468655899215"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7964665260167247"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1106983412201823"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8013587121789731"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8221339001399262"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.14910402590095262"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.07470105926598758"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4251004876119677"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.06822722346180643"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7114994281452678"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.511565583594578"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
