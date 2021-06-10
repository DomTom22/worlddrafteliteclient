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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.25516511505188255" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.17136662972162298" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.3283123068983791" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.8504565536956237" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6517150604291368" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.26547744711412924" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.6319752060404236"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5264354222372065" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16431487217370466">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3061851126667636">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.21588734687061129">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.38513888220412995">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7371882094965208"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.02631137920993898"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.06575318184585077"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8949782789934786"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7448606842212013"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6259884815418775"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.38622361244134673"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.9310326784743808"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.21554419196403996"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5509909784743541"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9591989888250825"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.5836112414910528"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.02118794877101382"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5935157574639838"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6288268800830237"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.7415980747085684"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.49154059633661285"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.788273577463612"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9382791836589801"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
