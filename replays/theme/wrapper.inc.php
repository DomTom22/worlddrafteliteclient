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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.672752522120885" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.3631262978257106" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.6309587141925084" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9883500339777127" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8415078576347368" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7590215095090382" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.36759201214724824"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9832290894720592" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23292799203612113">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.40668066220238064">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5853824347262">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.005578873988766553">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3872576912783199"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7506295006746513"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.2176253296130013"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.26521142780908313"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.3792348007102384"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.670033280487027"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9894897005825825"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.1443610723300477"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8944256590958881"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5248675673794037"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.574253910058931"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5268218012101098"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.7152034802277234"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.846320380169711"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.14417520693585506"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.04511499022919807"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7313080524674822"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7824807730127521"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.09346573266303837"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
