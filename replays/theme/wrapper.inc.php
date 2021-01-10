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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.695034022145522" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.3852845437739405" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.4517077956930611" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.23144735873432531" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8390690824856102" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.02669500342759279" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.9800610742484017"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.43272359062158117" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9116582261660078">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09488995370043818">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6832669227191552">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5442695906189847">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6325901170760857"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.01833762884415302"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.20620209795254718"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.51036449655527"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7278312501692545"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3396306550240378"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.32446476802812163"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5036514424961658"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.33070606334897423"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6020191080677695"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6735169155858085"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3464102069123922"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9346681961394292"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7938883885874748"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9025342182545106"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6437924546184794"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7567034375181148"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.07636791046421676"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.19254635434725165"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
