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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7962460939327791" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.4472111775274934" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9101161143474055" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.35473760977294577" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9933979866951199" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.396111340248573" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8925033208571194"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9301962178388057" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5500966936986644">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.68326816526119">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.7071592319734388">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.11305642457503051">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5347188865310215"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.36558995094144064"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.03480099030416817"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.256579408802059"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7598254139380187"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1401353631871689"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.932747371300102"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.996454500594407"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8729574450499569"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6883054451779944"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.2579317303771902"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.46211749524483614"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5477919245432197"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9858336477457741"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7377009153028731"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.12864546496830953"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.10369831637336979"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.3464967472556155"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.06343535427474745"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
