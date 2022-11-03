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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8232508550629516" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.739531813324003" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9090680513363443" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.19651548920893402" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.48258169064580114" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.2764407466172074" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8999730177057781"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9728209197836111" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9185392802083312">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7799567978447601">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.22681380371467763">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5726975720162353">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9708105698435374"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.014058877485109589"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5151554909517773"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7330237905831913"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5342729913541711"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9390073730678452"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9894164232219786"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8321016841441033"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6085729242868452"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5895334296592134"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.0002604784418911432"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.09920556080665066"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6467916652922323"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9716673215421332"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6049498058687335"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5647242008476492"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.08745802761334653"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7545180655329073"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.22111117086280507"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
