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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5376873327376792" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.9638838318122434" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.5130722505209333" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6647504417715848" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8662618346114017" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.49445486510174064" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.6510214833520269"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.38038512755388854" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0022916530142469416">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3522382061250684">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.429098870319925">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.2822412847122635">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4341227164170707"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6206131845298066"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.36795660105454764"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7462714313753811"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.15238318137408124"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6934044554573771"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1949076239932166"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.27046117435965766"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.654867389932172"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5519209428809089"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7842459539744049"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1462778304643504"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9455918220994157"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6794460390528876"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.16098659803566284"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.09103471950227027"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.667738626028181"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2840806194712475"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8299978031785116"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
