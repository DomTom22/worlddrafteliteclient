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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5588741794760079" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.047983371503202754" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.8137830882598445" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2501472961548412" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.08252793806142233" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5061865843534934" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.08231991606474653"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6626869724751328" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13922889487717915">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.43479882428055916">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.053851038747666946">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.2922300287908708">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7771983751752192"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.42205308386839646"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4457471188543143"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6073603059269914"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4539581077722308"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47709090515804053"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8486358930023006"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.45807943779518223"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.005622586913313299"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8281036204615022"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3748592797061041"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8897698446233775"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8312346232026413"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.23063612544295342"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.27483995706038256"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7449931818536046"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9082840757492125"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08731499333404713"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3852189314834713"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
