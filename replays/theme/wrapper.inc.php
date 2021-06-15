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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.41519222267796785" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.763544291266034" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.7604076171263356" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.63456364147614" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.4773265248713008" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.25666697041799913" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.9119668989156611"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.4695690651273978" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4225636708696161">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7034321576587035">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.7571678282341503">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.08642964245810969">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8627828411604035"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.4718032713124882"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5051737005197563"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5843201186752729"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7800955564913283"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9622399380735165"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7665195417858668"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.7738844102470088"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.9104791782792669"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.1908164172513105"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.0005593122491140967"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.3906609215768906"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.7268643221851268"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.22890781077195732"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8155787364884233"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6106542898411689"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8875982387173129"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.43946755673590676"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.3506551731799239"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
