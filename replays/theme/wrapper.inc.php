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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4709105660494637" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.3678070894991896" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3589193212232191" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.754247161030303" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9094793136020687" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6710671792078435" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.4801678927410946"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.697066472533814" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8639896016988116">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42941796905324336">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.5850515537996592">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5404600437910616">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9819348924765772"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1301180498936756"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2522515779066712"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4145308787745383"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9637582135436826"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6903357711271354"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.09086064308124553"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7845345061149362"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.30069596480440897"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9624455507432621"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.02243491967723643"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6765808309000987"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1677239548399474"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.004248920270848888"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7786111741636017"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5839380413416349"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.03921369842687006"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.81163505497171"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8859286489948952"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
