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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7967235943714726" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.06097197601057225" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.0497029762863721" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8913550260720042" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8930683192863156" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.23634436543016912" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.926133180601568"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.018453220456999597" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5885037775261985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24029966424399962">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.6832361248173995">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.3415019232783525">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8605021414361509"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6949729001145077"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.15437356109998968"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9830242906674087"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9367177728248492"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.25684456046175863"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.11882670987522714"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9129974497807427"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.046053169344348"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.4750581513745302"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.02322285978628047"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.33420433564392993"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.17752140623206292"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7680835408923743"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.06433403197173004"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.33965927463337575"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.28907502281647424"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.38218253718062223"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8411833031600005"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
