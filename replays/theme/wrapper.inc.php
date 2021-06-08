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
	<link rel="stylesheet" href="//hfclient.herokuapp.com/style/font-awesome.css?0.8361276353504585" />
	<link rel="stylesheet" href="//hf-server.glitch.me/theme/panels.css?0.7419160633610442" />
	<link rel="stylesheet" href="//hf-server.glitch.me/theme/main.css?0.049466062009236866" />
	<link rel="stylesheet" href="//hfclient.herokuapp.com/style/battle.css?0.6558852301381555" />
	<link rel="stylesheet" href="//hfclient.herokuapp.com/style/replay.css?0.5777489210719942" />
	<link rel="stylesheet" href="//hfclient.herokuapp.com/style/utilichart.css?0.9310730520329982" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//hf-server.glitch.me/?0.2894776126606564"><img src="//hf-server.glitch.me/images/pokemonshowdownbeta.png?0.3858680457516668" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.876689289110189">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6939772605232197">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//hf-server.glitch.me/ladder/?0.6783407909704149">Ladder</a></li>
				<li><a class="button nav-last" href="//hf-server.glitch.me/forums/?0.720424490228545">Forum</a></li>
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
	<script src="//hfclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5112007367788984"></script>
	<script src="//hfclient.herokuapp.com/js/lib/lodash.core.js?0.2577150442124456"></script>
	<script src="//hfclient.herokuapp.com/js/lib/backbone.js?0.09575865959837349"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7636105539311926"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//hfclient.herokuapp.com/js/lib/jquery-cookie.js?0.6868917290705072"></script>
	<script src="//hfclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9291837818401705"></script>
	<script src="//hfclient.herokuapp.com/js/battle-sound.js?0.17407327079659773"></script>
	<script src="//hfclient.herokuapp.com/config/config.js?0.33785910494659066"></script>
	<script src="//hfclient.herokuapp.com/js/battledata.js?0.9358229141213721"></script>
	<script src="//hfclient.herokuapp.com/data/pokedex-mini.js?0.2867872642914844"></script>
	<script src="//hfclient.herokuapp.com/data/pokedex-mini-bw.js?0.7349853640492339"></script>
	<script src="//hfclient.herokuapp.com/data/graphics.js?0.35253425663761107"></script>
	<script src="//hfclient.herokuapp.com/data/pokedex.js?0.14694819019082628"></script>
	<script src="//hfclient.herokuapp.com/data/items.js?0.327964207311221"></script>
	<script src="//hfclient.herokuapp.com/data/moves.js?0.8831865286695959"></script>
	<script src="//hfclient.herokuapp.com/data/abilities.js?0.8468930018722702"></script>
	<script src="//hfclient.herokuapp.com/data/teambuilder-tables.js?0.36348812647505047"></script>
	<script src="//hfclient.herokuapp.com/js/battle-tooltips.js?0.7955093748873199"></script>
	<script src="//hfclient.herokuapp.com/js/battle.js?0.5486681586458033"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
