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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.535981211027946" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.22741548436034198" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.25477837874592746" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.17526058471978279" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9392808217385531" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5099569997504521" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.16148881413268446"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.06341895270397369" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.28768222816685496">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.783332177004769">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.460601443781844">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6480956191813498">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9834486449895197"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.025238912721675666"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6357119525987294"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2050212103424469"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.13021263088665758"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5400752571505187"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5349612403164181"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8616850218495935"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2645421139267925"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6327131087152253"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.10149943629921165"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.47220835130491445"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6207374334079325"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.03249012602320889"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.04242749344334307"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7769909819565026"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.84753347410143"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.25861863613646197"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4572518988517815"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
