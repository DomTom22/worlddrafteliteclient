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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.2983687047978254" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.22884355822177893" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.5576823913450502" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.3386000259763473" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9172958371813311" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.32585512804320493" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.6251253009262516"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6638508264756151" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7979451146606198">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9421903586613849">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.11387790754502003">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.17115995649724103">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8114664523352622"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.23422680776886118"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.8358284391918724"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09288775631575574"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5959196513030498"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9915744599981631"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3042710017132646"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.15521592998815636"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.055130647622153806"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.05491616189801696"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7654440123148236"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9138593841490297"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6654577853004748"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5501497758077474"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.11121132735143768"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9407150002593843"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.3487418545077623"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8146665660174186"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9198145133894651"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
