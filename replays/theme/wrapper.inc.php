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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.1988465984196801" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.18728966251218515" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.20542444731671305" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.06757760520904466" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.29248123580038365" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5290567711284004" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5709541289727809"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2134497333297658" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5569461780159832">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.36046086459799564">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9423628020703534">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.4995152738883111">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20680126276808064"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.08309452158094577"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6540316971291709"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3244253253340139"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8990904177947441"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9160244910300288"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.16287781535360124"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8542357802463934"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.876333126467741"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.09928681122742278"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.10855101186462845"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.2062800184028697"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.28919761118589027"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9743213093229233"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.27399289107775093"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9294163373544957"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.3292474744439844"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.31410824219082856"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.7623829576394856"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
