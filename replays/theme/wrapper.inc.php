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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8876723074948725" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.2766788989470643" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.08871027239358509" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.26102496064318936" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.02271369924623734" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5456709622870661" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3010598139144467"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.26361507450828237" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.028615002166260117">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7676047685936995">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8960771740964795">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.25103573578075533">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9004991369474633"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9729143827358202"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.42812614983692154"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5894455921022939"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.24396011467629064"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7495397438474489"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9466746392663028"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.0044736026859104605"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4285262370539653"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.45786763430838384"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.061136971758212644"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5879322197633352"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.38029408105406537"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6708723736928404"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.58428578053847"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.982719871095602"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4476401939045629"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.941238102502594"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.14563472901572916"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
