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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7089606628812937" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5011144175962614" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.612462361338125" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5690375031829473" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.364380635405144" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2646427822105206" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.5037722131248039"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.1636938949507143" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26298724592849765">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3510818720465292">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6063244946048625">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.053612209568112856">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9259465316045887"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.02728306050840068"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.047965992099954"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08731807623011445"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2674659930156498"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7660510047446583"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5376150653504048"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3945051623825546"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7991966166432483"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4387000613653358"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.23207158211123535"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.72547399374732"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4659258078737185"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.23464643346948244"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1626350148389364"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2648522064535779"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6982151087452519"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.44417482650608897"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.27365130419851"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
