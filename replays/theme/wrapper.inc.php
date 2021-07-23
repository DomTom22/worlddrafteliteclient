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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5984864534156407" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.4075414388583274" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.01652645568834621" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.6079593858680605" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.944693020688669" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.41591584684849314" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8386407257629964"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9945677827708883" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7012211809232625">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7398571895894643">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.08132435111809655">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.08963367308846015">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6769383770447561"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.27328848760140656"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.04641996481171273"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8245319859137654"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.00032399263725579885"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05343602535901004"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.4649638509128531"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7527936371571786"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3487051646010122"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7858926433903468"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.15174731177897693"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.24291930430474595"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5033030026523273"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.14446539899736144"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.46009335756235514"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.27377594595057686"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.2618847418716155"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.3619267166285942"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.15212407398996586"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
