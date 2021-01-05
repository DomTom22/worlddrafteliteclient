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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5507937380505379" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.11123263901313107" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.3131284421834317" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7821907421695236" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9573290855755687" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7008134789189056" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8874206120796913"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.9621561346767251" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5538236613598124">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5851027882923194">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7889441037370475">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5554978633377057">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06009367512758468"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4664490177495142"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8052187814202088"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.34205769694138"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5118568068037794"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5750483608247736"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.19025565709264036"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.14927155045050733"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7447025366835285"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6752693896637703"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.08893585425936212"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.09092803921821391"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8119241960117451"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8019778830117485"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.12860204394427321"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4491362121636764"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.13695173761864887"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8622579040403777"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5797721649726579"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
