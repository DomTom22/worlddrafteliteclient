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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5760179230445168" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.0596427645704225" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.8023445985007538" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.3165051430202166" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.4364640656210259" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.07084788968752664" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8640822920338862"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.038983199246581224" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8984320392801008">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22040377017673385">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.709989953935845">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5515125992282002">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03804268749671902"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5854907117031731"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.09222943138505957"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2714664670646947"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.7878638037142507"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9117937561326537"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.8439688649166779"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.3840127378566016"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2559202889740362"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.05108227528216225"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5041055444697695"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9635768508051903"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.407697096465389"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8061714547568573"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9808422760829603"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9593023960150553"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.29039624559620436"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7621769294453742"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.48038052939794085"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
