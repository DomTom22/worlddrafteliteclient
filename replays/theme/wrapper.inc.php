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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8865227778992097" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.33358106283872213" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.7428770110633591" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8777562435652015" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9698115172144257" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.02895452063364079" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.6756395492025735"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.31025110415781887" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.03245567336370936">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8979612154716163">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.005799761427025096">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.014114725872169442">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2821336141077775"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5123520831353476"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.45515283922743643"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9293581369701447"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.3100416465606515"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.40259775782122165"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8605211917407583"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9713255483424026"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3741219617180733"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.44439373476260235"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9593901464818226"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.29692969115155843"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.674925218042921"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7194778141196227"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7450381118443343"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.21084811698395978"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.8145308921915"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.49283356747236984"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.2498141011979691"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
