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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7449322155755198" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8250515873846289" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9722566108112982" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.06535056019787233" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.34988781148663906" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5421583372556715" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.04270265703640663"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.5509284796090286" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5679693326839748">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6409005785787323">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.48647085297352066">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.6015867305007929">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5081100932352436"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.827333664460141"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.22819381007391337"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3449954623195095"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9843497992353571"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4965141847280421"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.09068841665212624"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8239897167588877"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8907342114269792"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5479586993766006"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9763843499609526"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6746909436986286"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9368787680791357"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1262553200315859"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9395580585179033"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.632831984588009"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8745247784087617"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.16094068662422645"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6943291758293977"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
