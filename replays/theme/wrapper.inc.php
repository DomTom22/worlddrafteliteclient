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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.831387582401558" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.18691794108261717" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5040078731451476" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.6218155855029539" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.3969019035334136" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.20512292450894365" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5508123469109187"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6481528414549513" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8299013360432079">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0663531280107319">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.6680164856583106">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.38045201944388274">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.94826760546063"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.33065840928368306"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.29496025196110764"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21127666961309544"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.9379405442311417"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8774972142003763"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.008761414561938796"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.13467070501825606"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6991594521022837"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.46910046440351816"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.2598748842386167"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6049959214592551"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.31944758148363883"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.43205638497062604"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.42700497156377026"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.9854434726531303"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5601776980069091"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6758870920877895"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.9576172639050866"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
