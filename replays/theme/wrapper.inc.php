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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.053030376187447104" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.6204959194143682" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.6695921682432551" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5260358690737088" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6669728194801852" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.1725924016134306" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.028853357746039032"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.611674871228898" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7202789949081985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22560013700138803">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.26750096952022173">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.338332792349058">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5015603986107748"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4331710003872995"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.2854488676263305"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.293211868485024"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.2630970782021651"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8653279346538041"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.34201309518915846"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6706818499251412"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.187569355699569"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.12269276607141677"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7039311655544371"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.16870492716490104"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.23313875713642274"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5218846299775857"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.26937722915585494"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.4080744577080193"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.09130433009312733"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9714008008698991"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.30061490974810545"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
