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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6518023660637717" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.40702546040081433" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5874401743281712" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.514746724436288" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.60075837952773" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.6964304038637263" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.42413547965087983"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.9970652022796209" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7395004252396224">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2790727638662034">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.2692362958666772">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.49880748808961295">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.00002828024426726472"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.6456492966853551"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7746044858444601"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.028625415796227793"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7403600796093917"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5696666441184783"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6447210951336593"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8108528830594746"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6539737945178814"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.3018368658299866"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.8601917280358202"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.7507696530129808"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.6013273624547533"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6797331533165796"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.0746685438481014"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.8709068763639174"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.4637130179239166"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6827477247261378"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.007332545526060441"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
