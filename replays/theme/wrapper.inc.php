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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.4462265064645383" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.28522681751060786" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.2798846348193882" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7353059885192521" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7685162123061673" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7392301288171756" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.02080923170554083"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.24587399075274363" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17037189763364347">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14256229301483314">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.09377850214208339">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.34617774415560176">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8045743170195125"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.574567678590223"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.35380578250146955"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3924647187762924"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.17407370474315154"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.551717015838211"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.18702382515368932"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7869874740241238"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6048782450415493"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9899409631282374"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.3963531268579761"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6569737420441097"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5794624504920329"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.92712173666052"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7979443917399092"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9999062860879901"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.48946670393780534"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.14710457954162703"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6153211320644667"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
