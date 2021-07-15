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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3554034921424767" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.000423732789823994" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.08599749807717494" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.2806773566450731" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6713700266688618" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.29112883215477003" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.23574898998043436"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08977191157112907" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05944921337007525">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5772072719420114">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8837313050311477">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.09137194166387896">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9514241250160649"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.3486212183704678"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.14574105286858097"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03883355367125829"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9377294614399152"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7867824065417177"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.34795682153746266"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6696138657038728"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5791666983793633"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.18062437375724838"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.22733825458937562"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.45375721163661287"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.31549037939183866"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8580961224045707"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8184857791781677"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.871608833326972"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.1698924479271411"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.3727858863736384"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.7364655475135788"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
