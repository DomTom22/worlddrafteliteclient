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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9182770509709819" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.37822754859975927" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.34394619790543457" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.20331204534705094" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.008119872808573847" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.30626302608150424" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7138537144280686"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.48253923811637556" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.03666970336762154">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.40888644488666004">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.40341306037182734">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.25563052976914435">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6213432220526933"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.879944234688427"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9290281028964473"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6215097399172722"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4825463338194944"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14829000895642874"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.30533445641814083"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9063933509558193"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5407700744921748"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.595234510503287"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5296468239253587"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7500271647994532"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9334069087140777"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.36527484070523486"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.06419856991567019"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7462954460077547"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.11900433203323035"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.45369515818159956"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.24562684665419932"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
