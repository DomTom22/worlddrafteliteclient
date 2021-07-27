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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3664394616164002" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.42598783381071814" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.18712450523898627" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.11700408118706274" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8324643257235937" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.20173930902604376" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.9393150912652093"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6232833100307622" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10004120618021961">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10501642382799314">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9594782548343481">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.3980107953074732">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9922160423698336"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7658554762210821"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.8105419825032294"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43331174813867834"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.16506904914341813"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5381617310497837"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6484792258268994"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.07382717594744381"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5257051225929414"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7208893508626797"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.027235892078077528"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.18816668464424446"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5365122256545862"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6330104002259473"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.497341910388033"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6534822555691366"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4770056763776951"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7006288087205934"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.21011221247487488"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
