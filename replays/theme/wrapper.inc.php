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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8551262284765337" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.8212170707514768" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.735718572764742" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6603448127555809" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.706446365245875" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5837568680961531" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.4605899249465042"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.023330676079468482" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33549203255677984">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8256182089711401">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.6187225696005503">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.5333817925797888">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8664583914197939"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15499704469091835"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9313218687142666"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6421624932597239"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4129176306214759"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10541937834318382"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1998493971211046"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.070927767079082"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8866390902472996"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.26980003237884476"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4862228462335503"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.36374704747526265"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7852158436515426"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7464547357713189"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.47698224152548163"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7430606462102114"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.484696235609289"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4684364450061471"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7778793335262604"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
