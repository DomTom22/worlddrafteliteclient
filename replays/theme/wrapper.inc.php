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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6215517843210823" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8913009323731338" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.549353834037948" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5329798315639638" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.028225781357622104" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.10390860858221118" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.23841764063571502"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6595298719036129" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20557887921785922">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2703116951839337">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6447784698175347">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5346431028978667">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09960320065491013"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.44949327534496075"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.21811859203590855"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8912264857793439"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.13321089088918714"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8969431089408597"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.006755444335466709"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6526360824790582"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7103018851477878"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.044919979632324525"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6814618189194972"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7015940056013545"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8608143039486955"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9959710320440205"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8711395252817637"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9371025329763365"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.13510895634240705"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7174832200979606"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7678764246697707"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
