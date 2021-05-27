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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7991233712375458" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.22230231888902674" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.3144299555671499" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.44992603162401057" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.036499281428778785" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.06076591739879467" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.19318666664721973"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.5845914684998847" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6524086016424167">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9262736884481169">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.08331184064408714">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.8574026986269379">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4774810914259908"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5073367509213527"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.9626153771267452"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46376299914154817"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.019706549995869516"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6132340353479935"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9181805192387664"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8208889541365045"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.7366340783122922"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.12239819108164207"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.4852368682502095"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.14840117402610864"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5663299305582987"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5860874816115709"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8240304980436202"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.5743969492358618"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5268414947917202"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8632684690739685"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.1871042800012348"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
