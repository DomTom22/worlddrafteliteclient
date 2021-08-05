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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.22184872889548068" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.9816725415693639" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.8157063812681398" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9389909338158742" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8015609893493416" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.026032714159828885" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.8379141227794829"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6069121712160876" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08197705128127675">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3203463394322219">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.08097294823666878">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.7449482642339098">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.45746241466689064"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7906360634659215"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.8237363610448718"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13546922531045058"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.467802706902017"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5520274454001308"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.850767509713219"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7446302074139506"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7917962883819407"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6403134874864456"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.1877000747873918"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.509042509697542"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2885116317888532"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6982956497388169"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.30570420127101117"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.95131850942701"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.09946067851912854"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6780134772086699"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.17430109925532133"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
