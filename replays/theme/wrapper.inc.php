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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.009510186012239519" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6755969214835884" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.42468008499994814" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.22366821441038942" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.24947934325665466" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.28061428726122184" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.21120420755131053"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6572582542522074" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9140639846796059">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15677266306086723">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.605284493798234">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.03880676405748562">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9743872184442963"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.03527927100044881"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9801455785415458"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4228531865569427"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6108542730988833"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3598064986232874"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5528737669628183"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9943047981356545"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8669991115757378"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7208797465771661"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.883820715931662"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.27699304936806857"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.3063129087709102"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5170757234383716"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9768177495084953"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.4038013336540893"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.915689523866277"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.11612946566271876"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8524391864939849"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
