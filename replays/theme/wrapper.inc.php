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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.18331872475602662" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.491676719163066" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.3575457375178015" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7235936668801384" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.4695715431604939" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.19088684852827553" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6108385122932916"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5174063634894173" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1250975393581919">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08581229370113475">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8029372657128853">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.13943290514580586">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11644088660968732"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4662700039983301"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.49307061204260116"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.01372433216587865"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.1722550772288276"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2047484051180053"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5864453978497985"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.20901472484275274"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.11749514830589591"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5432614835570948"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.4165371654769485"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.33141561849121404"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8887555440613681"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.21477526503625377"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5382849409717827"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.034769739869243255"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.34902582710879626"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.3481961528816555"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.7796734310141886"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
