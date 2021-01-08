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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.822160445797844" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5717245489434466" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.929525337096367" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9254906863300207" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6264719522912225" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.33799995204673094" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6095059415960318"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.11774573692547219" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23645338352881895">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5129613438582423">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.0051498108232019835">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.09714634477634854">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3798356618263943"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9345072018215603"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5268155377599508"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10829263291017122"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.44949375766414046"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9009875720589549"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9499700546810808"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8236783478837186"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6422020818770486"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.014015013900526396"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5589803647747138"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8163849545853052"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6690816826577244"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5474858244966703"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9603632477713275"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6041397915005382"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8318181911027163"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8188042192631326"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4470224935198255"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
