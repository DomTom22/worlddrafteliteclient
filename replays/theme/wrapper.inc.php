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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5288063582038955" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.2627861510054126" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5109802814364948" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.4745565322055476" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9972782158271101" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.8131637974200525" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5601641684786243"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7455323792936615" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9999285704809033">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05153588022438105">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.06591497458715612">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.11692452430807276">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6206075641406164"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9468820623159955"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.1362711556219205"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3398456012437323"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8464195343194387"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4633773533592933"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6793425101061932"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8919326360980768"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.16659312094482703"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.8634290788208852"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7424079522650229"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.8772491829378459"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.7620942134046931"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.7108607992724165"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6583272062316108"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.38168328850435507"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.7376807284983837"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.25899060029770515"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.34967358739569754"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
