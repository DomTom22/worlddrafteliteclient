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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.44150305245102683" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.6316416741942186" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.11713120959981316" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.87313477871538" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.26729852244217045" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.9990889300468728" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.20854289028405892"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.08460603610640183" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9945175490921618">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5134435185490491">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.1823190838439579">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.8649408149975275">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7244782795744769"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5580091377527729"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.33344023066918593"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.821347360394205"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8794314145301145"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3882686272339977"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7739410718908875"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5061266593789138"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.13715963283223642"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3660255667035144"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7649469065882857"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.7289493256184143"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2872431505367945"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.41243047756480067"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6132535621944741"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.972973233320948"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9252625150636129"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.2855755522936605"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.16517622003053312"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
