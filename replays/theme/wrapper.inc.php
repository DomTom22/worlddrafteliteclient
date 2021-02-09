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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8220610101365433" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8853416871034365" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.16008688144981376" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8246904729171232" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.08570193410091131" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.17056130491233468" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.38419811242006285"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4998119128879488" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.026863468479704666">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7663951800813014">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.05447492707855539">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1783475747363623">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8576829413854448"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.27770229483974473"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.07192522982879157"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.489067573241162"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8242335004524186"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9912473354221065"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9776781595057795"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8503451190104789"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4572810339330249"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4141930074705642"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5037683993253632"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.45791549970451806"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2615762610109269"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.05093136186513769"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6050050058961693"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7718450215172983"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3146917894367973"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7384780832010907"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5481696584464286"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
