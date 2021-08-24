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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5018753069658859" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.11152224655227694" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5431033484615206" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.06399971614592959" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.08580500568046667" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.08104563558745048" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.24331322266152622"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2725108187696601" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.062328988916232175">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5672294921284375">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.41948151105741216">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.37380405045259213">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5113681211289793"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.48298164037325275"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.35363562581559793"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0006433879194160941"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.2017102730725533"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24545086052357057"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7191545616007251"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7333635377920604"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.06797040382246267"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5303861112843393"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.20930774659173523"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.18019075526343187"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.1532988830210784"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9061458031197567"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7405793058301882"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6153300739421872"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7540474986191057"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5601136479175579"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6518581996402917"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
