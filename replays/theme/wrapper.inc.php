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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.28594710546948643" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5809801368994685" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.4784700460543603" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4112741386328054" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7154216338268962" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.3132154411906658" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.9432509050014624"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.024201947912494193" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3624697530182712">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10871091539706823">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.4248595441987393">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.04238062994896352">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3651564397736977"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9810926525594259"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.41795573228854455"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1859483412949976"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.480333715477955"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14115732224241584"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9464382736990489"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.37437195039383386"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.32951438136714284"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.29818538196604805"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7575104059120779"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9607092702219626"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.7871448982613212"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3575269467940372"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.022922109744748065"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3762686541518909"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.6236263486368221"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6918572554917317"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6782596721787761"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
