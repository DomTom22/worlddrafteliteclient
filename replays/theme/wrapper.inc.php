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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.03603662797856377" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.18344029914156734" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.3146502334870631" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9908064025737051" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.30497919173442156" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.13180715685328548" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.8958970955367545"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.6254960767828286" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6232821768904342">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4158448380680406">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.6708722553550448">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.5129617762787599">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14240408530840254"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.28133093525128205"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6277916192904089"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3593974954905217"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.13947819127340466"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.002423941702175858"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.21023334142915195"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.007708693254528942"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3641690505080284"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.17835145509754224"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.26687493397102524"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.2041132886541479"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8697069504779302"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6632083967227382"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.0676279544080709"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6571513491859955"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.6476254596520212"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9292675108111228"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.20614033793942466"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
