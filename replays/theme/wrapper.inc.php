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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.01920241212360385" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.4039806194942417" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.14674058839192328" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.20691364538634383" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.3524951093524342" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.44303049132407457" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.9798006794941239"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7056545313021587" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.050481112029063135">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.138266993302252">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.33200830010044435">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.15406469298610204">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09798817830471251"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.42382112988455756"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.0018523284581148936"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2527760475408489"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.4387171494371289"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18380762634517378"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.23567263925523596"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8232977099699272"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.40188819563805933"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.0020047075281435234"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.6186838112834658"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.917058402740559"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.33122219165051936"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5935466485032059"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9047898224534512"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.863879642198166"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7540750482811203"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7015220745138735"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8024372756213061"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
