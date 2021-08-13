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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7215343858020256" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.9728000470838964" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.7720478196203779" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.049251936474956404" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6402287980768557" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5942162533230493" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.4863130187288356"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.24702285014266656" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5468023758021232">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7478119189456609">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.35901587428051007">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.010812866669307253">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1538349978168403"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.015044826310171011"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.056448241134082755"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3422242823118784"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.39505234211796725"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.891535620448054"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9156014227720681"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5265761057721752"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5962233487722013"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.12483370378814063"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.20113023564416577"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.980431656567536"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.3333720699146099"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5760956093747123"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7454561558452788"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5145707941115429"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5332384956683449"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.3367469744074554"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.06728110441763846"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
