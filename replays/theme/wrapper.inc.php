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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.41875161014513407" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8340124388969881" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9254058982871893" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3443465685735718" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7447332192222262" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3904313470465204" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.1469377245671406"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.13727848478168192" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6121351244182403">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6063426903735116">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.027023673709895446">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6701766505188742">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9557966412193386"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4377593021771782"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.27417561531175605"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9585690215544485"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6841881407639623"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6835731215482734"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4287385251839153"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5409351928495889"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8296329024484934"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8925902520287303"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7938170413646521"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5679584438093035"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.723643408656601"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.717402174840968"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.47959547682303083"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.41615875433564176"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.16376247705917923"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.019736203555055676"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.733965109575462"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
