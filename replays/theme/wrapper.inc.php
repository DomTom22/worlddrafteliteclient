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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.0994678164118743" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8612064052687567" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.04774389099872978" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8162486556487942" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.016829114647140653" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.20414947018443397" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.49415198646133884"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5195317043758203" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16356179973794305">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8551917626512497">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.0644341573575895">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.7784931724166346">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7636936999416573"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.12764288690058945"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5746907518237456"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8548700108281189"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7304867444457059"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6608831626190037"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.06959104723909548"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.888891739510991"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4592416918866651"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5269634802715084"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4820919670706987"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7420620026438016"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6041200590449896"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4001466339110151"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.27116974896581225"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7430467145227149"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.22736105388144012"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.047699276464055806"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.29623728889509526"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
