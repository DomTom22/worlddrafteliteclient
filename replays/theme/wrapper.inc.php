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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.2313283146905607" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8202447055833777" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.5506242989615096" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.3810208125587631" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7475486184122011" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5549450296771512" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5617763691683704"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.20393123755028908" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8413762359422647">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8195321795575785">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.06952274934985736">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.6297157263426139">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5782530479792665"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.3201057188252958"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9946660079733227"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7309392785220794"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.1689670602753952"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5231018167504755"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.4060535176397768"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6662054399878217"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8055663124079158"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.585855119540178"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5498069333899134"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.17940917091518283"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8804875911629739"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5092764267864569"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.3778165595157761"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.547889403368438"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7679202744856668"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8093805945966597"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.024901396584088964"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
