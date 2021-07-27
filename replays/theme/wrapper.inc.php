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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.43473387803823327" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.15334450631308894" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.8295396102325652" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.04423606037440608" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.19919668787288858" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7346038248568048" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.9859725770521051"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5941300208188118" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3658240110794624">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8412932245425904">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.10402078197697207">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5402720308352928">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7908670132025384"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9558483010830476"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5775338025367052"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7272406654801251"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.3645930833315336"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4830530420015844"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.16168273221544394"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.18585532780213532"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.38501601124942897"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.49825670688318824"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.31608954722213856"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.41210511610792233"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5716069544438338"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9219445098126346"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.11736671643276009"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.2808342827111723"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.34541380475702455"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.259488745541816"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.7712142315842105"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
