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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.16855580097143585" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5750171097924501" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.7435227661734802" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.05015648980913001" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7086073196980962" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6962170654647981" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.8407784478645242"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.583725206745334" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22094970697489003">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8958694081098844">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.009905442273272058">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.14756295182501766">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.709655710911496"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5238630876246799"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.05830123897765227"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11200804466349013"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.741114817548586"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.719435941998376"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.25805285927075516"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.327079971133194"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.0028104861493942757"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8741160094606066"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.574841534876428"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.11916522050065792"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4541077585480273"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4161356688820217"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3913242197202498"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9896190110550858"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.951391269897309"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9915569960419468"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7356016272836516"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
