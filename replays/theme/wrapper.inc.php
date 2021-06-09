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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7346892976237274" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.30206227746554304" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.7313614238475254" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.26760884510267835" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7306009850878374" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5696387804801961" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.6132318629672997"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.9049482245567533" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1934981694781308">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3883144507623171">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5605289775984457">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.5443790439937444">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13411011102964943"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.35384737868400795"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6219398863467522"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6332170254175797"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.07235374285694629"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13009769554089679"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.05193784763110121"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.17484939134579736"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.1468718070834052"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.29854575042361464"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5737951970951627"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.3691872954552984"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.320983006758339"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8410320113856058"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8613943280110641"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.2999295326910836"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.0730199231718347"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.13266485908977388"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.7096191080904457"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
