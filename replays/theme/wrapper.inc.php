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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.4874055518534348" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.43286876370472527" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.8547875624020804" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.13627321593537678" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8978783031537927" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.12341998174365898" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.7772563978670832"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8964818995983648" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06718971706659427">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8367809217810593">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.3728043550880118">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7389678007091878">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5336931249995056"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4106332494770504"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.536062170060976"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.40575188770020043"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.20826647975719226"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9822667436571111"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6982172115733447"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5347780888780198"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.17650283475493"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5254545376158077"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.27556120470400636"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.13266228231323596"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.12909022273600446"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5341269412431455"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9141662436124838"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.23560599932325688"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5693263150339303"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9253344838745958"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.2639370257033482"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
