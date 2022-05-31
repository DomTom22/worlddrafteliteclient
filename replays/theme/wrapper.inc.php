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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8483395211918989" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.4288668389585011" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.6049620128330897" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8340083521708559" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6686454883077195" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5695792359220289" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.2715488073437038"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.061380965629799" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.03074947648115356">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7343704344642423">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.48725816635882957">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.34721250814942817">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18194687868907922"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.38596857558892017"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.3684610212395978"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9960483025656388"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9284228445089675"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28825120376636604"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5495602082380795"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7978369041125459"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9127251697801413"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9342447271299799"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.31732813629533796"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.24133163868365504"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2776308264172196"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.35697580953956565"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9787889602047524"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3783284133121241"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9134284796272678"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7746203314774451"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.463231366618325"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
