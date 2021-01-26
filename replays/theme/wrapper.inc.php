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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.12213505282669401" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6653189282741665" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.588405983391493" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9426750902214909" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.590754382678824" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9634285647406975" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5398483181700433"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.564069023804814" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9690329890130069">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19557969011281284">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.27241940039342705">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.2626614815402917">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9778653368519901"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5407946347721795"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3636452170085813"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9807719199269211"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.039479216617283264"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8133593952238396"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8040365092277146"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8073096067071008"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.27259829953164094"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.49372946705193055"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5968058870136439"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5822648348447872"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8153284627447934"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8976223024012806"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4706484438206564"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2769986220516121"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7849014953141704"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08191056316443013"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8279517963011556"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
