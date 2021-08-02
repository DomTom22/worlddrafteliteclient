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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.24812880932107162" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.5999681728835919" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.2906596569703619" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.21949528707698285" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9195122240296463" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5416348399540833" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.8514127397132554"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15604596802622472" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6855754039810207">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.041386307645448595">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.14067238620711575">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.9246383617544236">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6092261463642803"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.2263710865234445"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6811986027279542"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9197228536409312"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.11055783618277015"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5923208448173019"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9791900446937607"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.3797041234685743"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5991827263428544"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9845141192656832"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7695117749165075"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9251452480128439"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.3837386714663915"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7700654621178753"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7331392898648197"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7482896749930905"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.12505747570534553"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5758609831823527"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.5758752971972676"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
