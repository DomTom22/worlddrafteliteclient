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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.505459054862492" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9111735172039559" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6538856994635642" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9720843690393304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2006820947285759" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6380367767185835" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.7105815587008408"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.29555778069956284" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.24192735724418135">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9794173897180161">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.1730323932685056">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9370776680679695">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29102105330037875"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6294960995491279"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.40944534701691193"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2829160101728896"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.30050306595798704"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6589152422643765"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8743320980996143"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6827870428997689"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6356308253736014"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4586196509691045"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.0964426767908948"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9273079041092025"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.00844108685340661"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8243767303776024"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8819182146806335"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1969821456046592"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.757225879675272"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.40721495242114947"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3940768004482633"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
