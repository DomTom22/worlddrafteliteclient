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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.05392084597498914" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.30246352004579324" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.941080533101692" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4362571026036757" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.38808977423055424" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8368468111380276" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.03784832210381017"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.8892383855685853" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8922975130711006">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5380470224004954">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.7461041001669486">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.37783209514668226">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2003548056585136"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.05401007743849262"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.3174323364415339"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21101670460071564"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.21705249736076127"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8385774899378695"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5644524624845477"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.0850962787408962"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6132216571339815"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.1358214225359935"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.34144686596205265"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.08699409845799622"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.13303499069756164"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.09039057949921703"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7022479208751313"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.41536996452611086"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7286425098338221"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.1881773327221825"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.5361832398470507"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
