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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.643367987880459" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5835938766968161" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.027907754733444978" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8135946104401575" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.282182886901881" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.33586857351775756" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8704266264432037"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3965325274846121" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8468616472615704">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06819184694462033">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.2903631347793425">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5402625582331699">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5528725746898293"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5481520349059814"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.026526812028871527"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1172567105914728"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8022452395253119"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0923787080631695"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.1817568486988015"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7791441671222188"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.07376301058722246"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.013079385648988806"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.07895171900813502"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5572394848717375"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8941032283231511"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.429167512617062"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7249870526840856"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.8229794534482722"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.3252716327319667"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6334378885866616"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.940116406314677"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
