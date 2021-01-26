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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.06100854654896937" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.425138765078761" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7754790362930599" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.10751386817444919" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.21421312346690136" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9519672239633057" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8581466818238173"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.13641202959193532" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2293165642484425">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12720861696136687">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.4353282998006449">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.8322424417945218">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.026575653205438643"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7770712474270134"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.25184685008369767"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9859927273308422"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.08794673279225096"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4256520895839191"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9632967174666502"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7806413610037852"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7516035964573491"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6869095156003331"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6656322208413228"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7278780638765121"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5954934993108325"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5640639896775654"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.39537577942860835"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.26779648003698076"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5658245912652977"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.17723941478524785"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5319210540870514"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
