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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8445792027459715" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.7947986676768335" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.2806057131755635" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.18980642976620365" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.1936167808344531" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8453705131210738" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6931026394408182"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08427589972815008" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.43927858236005757">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8508188408611996">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.44644842853069755">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.6837825796265455">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8035364229925723"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.23299662448229652"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.328988389188146"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.012740066682276119"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7294764433839303"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9902867397744"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8727478498219465"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.37754991756813516"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.739102126562843"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8514128943871555"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.17609361272426427"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.474578804161524"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6816331120611232"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.048032266687662695"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.3273128205887781"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7688411005437437"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4951622382990928"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.16683251440897218"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9256865645558867"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
