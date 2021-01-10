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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6799689869862238" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.6689526499330463" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.24876847629867505" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.028128573605643137" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.31591456023306663" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.40578200670613596" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.9457859718851205"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.1536852953321548" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41764971597070555">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2105129325517947">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.7340082996104498">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.7582656499547407">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7101195809375156"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8242284827125526"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.348691135428737"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7334846488785329"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8099570487963572"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8410216140654612"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9628088392469676"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.34598034324455385"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5164970358927696"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9419042084114191"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5128020003308174"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6019871125421719"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9029123775988046"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2930593743137626"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9468498668941632"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8860373924002609"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.371424712069945"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.26404023094543394"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9081174083839645"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
