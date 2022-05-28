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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6981476896461829" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.604312767405828" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5551428376060141" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.10032320629245062" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.011355827263085594" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8921220298596595" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.9500691991959478"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8986397913412079" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.042023316012981926">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9038888270342771">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5594733220616064">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.39947057427962385">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2513953042818369"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.672235433971375"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.4329665315353657"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.38197191201096925"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.29050711041900956"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9585202778539899"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3968441312480673"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5205129486095661"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3065819361574038"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8233969332471871"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.3521678180293757"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.16107745553305075"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.05507892230965927"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8180110409389396"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.2562300706789076"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.473505486629729"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5545241485137622"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.053035136925494664"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.924617460385011"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
