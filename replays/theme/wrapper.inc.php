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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.9357923005925817" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.6620994321017166" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.886577682616339" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8821593124240279" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.32023004575132363" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.48986027263261467" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.3055059177137853"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.16363240531257484" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4868807920474376">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.608379579602123">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.7955689638345145">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.06729224379264642">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3974610265869736"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.46720183052935904"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.20814444454019565"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8091028397666533"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.2753162067725381"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.45479750503657446"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7642496757675903"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6090131011448361"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5673644288680333"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6029983239870917"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.4224119667267694"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9960707465710132"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9822521701751679"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.9370883602816342"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.2330043535762567"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.12399992905049961"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.35860067598158607"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.54283640464613"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.31942611979243085"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
