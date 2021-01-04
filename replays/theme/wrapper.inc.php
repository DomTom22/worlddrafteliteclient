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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3922003654913475" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.7165278247301239" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3268064859450881" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.23463676536377998" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9698978177980158" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9529510995760608" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8481906441095575"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.203549041784304" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1367932326326735">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8295010045495532">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.38393826274739706">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.1361367203251871">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6825226462277783"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.41891537949840885"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11421952803149416"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0957944907835584"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7470661078245566"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9645766398542219"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3853606188042513"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8206149667295808"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7754921271477027"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.0011619426538245214"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3429835518020816"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9059253560470901"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6019095378898827"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.16569129730947374"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.49032411630055117"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6698380692795718"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6027008652264503"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.907657843745713"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9988898698390969"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
