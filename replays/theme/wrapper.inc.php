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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.210045075986373" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.7187408671054283" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.7504768679607772" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8440883979022888" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.009861600845708862" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6354837977543952" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.4892716246721225"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4831597378356769" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7165107362043339">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6090581823195773">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.24396742272565697">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.2256319058884304">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1901366967275253"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4838338432369016"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.2124988423132934"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6235765004972322"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.08570822896634578"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14820345474186536"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.35210781271590696"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.1322720488819782"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.07169597300116437"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5723052774642305"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.06407684867580321"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7742497049343171"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6193940978311767"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8177593396924825"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.3598047587224502"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.29885479890343447"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.08733117895971487"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.42378440064185363"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.28229298553574034"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
