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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.35103856011204826" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6826622701828418" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5890034892796088" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5018121863190983" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4105454085650293" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7690761301439257" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9186072679333597"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8642828401830294" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26197319732600377">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5537693591660688">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8848703114013279">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.03748385927921416">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7377244642805301"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.20275956702857822"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5915752762279141"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8013602987572845"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.08851245650366035"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32908768192698235"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6590013402232631"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.05203580197315638"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.41822371583588835"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1707301502870695"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.996268480869035"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3077693704801212"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1090243655123111"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.06465557482001194"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6203224163786505"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5035983392365517"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4222603376255085"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9117873933137344"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4683275160344602"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
