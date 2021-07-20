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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.12122850000312457" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6033270047251824" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.07081181898601896" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5468076484554023" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.85200002965541" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5568781939373648" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.7697218142555644"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2646477260791291" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20952972167372574">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.044869600505766494">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5809980232215368">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7740992726390548">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9115792195270835"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.1312029431001942"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.18700813086686296"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5769372722050559"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.15031452201713913"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6330903879630141"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.11954886976256907"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.2851042693732686"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.08866646924552035"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.4315291867657305"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.32931615995089736"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.21851945564841313"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.11029630876627583"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.24527181173962131"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7602525802389719"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.16862092516209048"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7387262976991029"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.38072156498887355"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.7194914093036404"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
