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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8832775102397292" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.04517937478464984" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.9163367762737482" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9345867700258772" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7052251926465491" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.2849532455332491" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.6220962271233763"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15007685955792005" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06289835702155888">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8857050932947326">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.3218727860397821">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.7436890670685481">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8244111831459338"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.013130835348933223"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9475063247950344"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.33783622443908"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8335731558453823"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7016207205675218"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5470535657148474"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5176130212286065"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6565541776836987"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.11179771277140693"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.6765453935357137"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.8578368919983779"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6348155532802491"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9512971092781213"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.958339290865988"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.07872987677213783"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.33976599179830713"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8566181182799326"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.480584140267619"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
