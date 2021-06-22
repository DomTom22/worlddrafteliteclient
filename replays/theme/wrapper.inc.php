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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7361087469901486" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.13472683338697067" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.083985274447814" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9534425455670874" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.847346571039481" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.035890477621165484" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.4633752886511615"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.9505021036529357" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5972901718407164">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9024731575997844">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.3501813589923204">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.3998966035192639">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.47520378528139817"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.31552521104304"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.896086310977432"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7120529431466303"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.025715867860601316"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.037497129883346414"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6000931964145724"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8086097682964404"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.7679573977480472"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9540215728976846"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.71015435710194"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9218395548157434"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.7667319301865823"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6690182112833334"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5528806310720591"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9390798614672926"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8908022166683591"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.40430443916625647"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6204977172079835"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
