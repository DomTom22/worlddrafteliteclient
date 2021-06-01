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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.02877368180051043" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.08232064162275532" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.3296598522790557" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.6488928680402548" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.3283633768854137" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.8819248768702843" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.729309327664095"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.1474022263680248" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.98884563249261">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09318456764282113">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8706698660284948">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8959385363315775">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4007145600283295"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.3760044442180035"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.012895825133099947"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23008994475079425"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.841408602334196"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1941349339668088"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.886156680089748"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.47439153962506997"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.590311175540567"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.9625469558051691"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.01564829305867743"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.5321082446330025"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.8585765771319036"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.07927337648465804"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.4681579733036938"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.8935155305938389"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.9703608057707607"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.3128172516594181"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.5448637171671047"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
