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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.48820591355981535" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.9743425436595323" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.604903116500733" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.2561165253364863" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7704777859404568" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.30621728803602033" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.34990320484449233"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.262638608363456" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.748894768346112">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14577685010230979">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.6267391716092443">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6649470548616216">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7675146824691461"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9799751735367861"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.22667324758945862"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.012373896290986508"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8202618252564433"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6600081297226692"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8730018914063091"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.25969650872869554"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.13995239084363775"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.10484653501699781"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.23402214186386794"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.29866748177062674"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.946065130492457"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.3696430776701123"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.001140198137944859"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.9634494373147271"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.4354235649110936"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.22406311359199416"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.21369664399959487"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
