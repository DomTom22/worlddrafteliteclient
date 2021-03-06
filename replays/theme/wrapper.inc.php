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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8330140870733247" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2807639547109415" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6018607656943229" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6351115104724676" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4595896364818379" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.44722147532673273" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8535419541204561"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9126980609041924" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8638522541193601">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6559257001669752">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4075826493076389">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9052992055589937">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15247293218060642"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7263428537266747"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8176235331746142"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2071690995787827"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.25382013839571904"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7507612359523423"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.960345561184657"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7481498170790413"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.48881485661938884"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8374643422434225"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.19436521573395904"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.060858119369961106"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9612973668882059"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8011813408697095"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.35196809521429295"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8324762890657504"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.31721936082374413"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.47273611890905975"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9740788719743554"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
