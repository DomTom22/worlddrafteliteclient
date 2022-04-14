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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.27596443903084533" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.619601587881164" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.08349261311382628" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8196233930418897" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6886764116359934" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.06342273281829836" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.04348548283619902"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.44975988950840606" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4687373712617635">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6531252432313293">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9172938140686098">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.6170851961244235">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.64957318519164"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.537823521586621"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.010147354328547076"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7700310117057556"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5343100202465911"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.817907883105405"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6105115143012994"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.3698583932259547"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.29724175435894873"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.054186835608975636"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.08482627032246204"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9695904107629998"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8210635481836015"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6536412897170831"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8934986078390412"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.7370741364313178"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9771574298690786"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.2753815655184282"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6286704673717001"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
