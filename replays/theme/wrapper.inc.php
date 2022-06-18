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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3022455904928205" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.35373317609479615" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.017224201804223238" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.03136877290927553" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9087074868403806" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.669562494292731" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.3520048977036412"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5776681167025883" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6354754470813828">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5168351777899569">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5452274891829325">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.31275098016201675">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9872164908995307"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5095081547137621"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.7094350807759524"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.25475829409950945"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8249412959075886"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4967281730811681"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9391311837470737"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7690161818701171"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7717114618174294"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5252279672523121"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.0175186728730361"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3653781262699398"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9641941409212258"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.2517198227231363"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.27218543879361445"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7829913858719899"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.535105230816048"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.28367841619491596"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.173007359804358"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
