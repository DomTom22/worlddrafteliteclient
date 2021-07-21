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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.10891718975949516" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8398796068949301" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5079712043109799" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.13504987564139448" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9079263550034584" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.02187845828082846" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6275176169884233"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1837349581551182" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1790617268907586">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07387662688808705">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9382376442938591">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.009453520502981094">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.586831139577425"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7500466500975993"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5237110630411685"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18150632474489425"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.15319568632070224"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2616985196915489"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.4765367639322111"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8485977511105811"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8804763861213953"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.30659907597521197"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.367332093917057"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7161341491749227"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2287777456452995"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.09368569880862188"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6222687597181906"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.15264745785210776"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4164443997481422"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.31835330880177604"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.2855655490298872"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
