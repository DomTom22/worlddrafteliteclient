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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.41476253000336416" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.890749691630675" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9175458423592642" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.038492086909133416" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5224359512812637" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8271633831982286" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5113073385355507"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.7624421799750003" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8072479439098093">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9969077048553256">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.8590214152251423">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.3840095133416872">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5040990378081451"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.332062806120462"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.26275963675821945"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9936700948292456"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.21042031467978894"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.43066878896042016"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.19430642301524403"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4721045676372464"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.701818225351813"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4160495558533015"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.11399361678674103"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.19849780457375887"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3759088887707691"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0005731968247590924"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.03904049558467815"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0008159922115320573"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.19247486840680716"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.33900110783665194"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.06054179786832292"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
