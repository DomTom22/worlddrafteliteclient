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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6099503430618969" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.6397430640962767" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.1832249243821933" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.6021450865219933" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8641350762742703" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.18414764488572333" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.06173574825181283"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.23005689403492657" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8485619929045536">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10404705698053185">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.725656208752206">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.31127010881298567">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8945334048105462"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.1495347679174126"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.3852411070120483"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24283534053136324"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.03272000925270846"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.25298493659948607"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.39642121542454123"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.2778034669580669"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2393535520598924"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.38268269397512644"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5649169442175705"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.8544763530800694"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.15521555282704602"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6065128325841498"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5277678053313097"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.20154383023288536"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.25462924953275157"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.25702967656896614"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8670638637053565"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
