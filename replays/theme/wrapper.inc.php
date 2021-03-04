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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2899973037092265" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.406748682818854" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.816453689299856" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9220074811806243" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2784025046544869" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.48810968907736374" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3072672435531447"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.0977555715276861" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2942174808093747">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8902124993974936">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9109268493629494">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7441550140911477">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8570473849925904"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5014473077488864"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5488282254546046"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8313329033788193"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1436226948105952"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7848308351760467"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1665559739590714"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.30059727222082366"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6929768133964433"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4642673187469981"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.17080234550852413"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.24645714576118882"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1941749030285893"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3766909161576353"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.13719409088057333"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1650395883223108"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4928129275646602"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9344681181566115"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.19885821825600947"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
