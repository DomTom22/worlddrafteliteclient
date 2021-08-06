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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.380461524342008" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.9826411234512287" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.5428885296300914" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.19406548182199646" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6026526843558546" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7479630804516775" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.06937315547761136"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.994722165223221" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.55494897135436">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08149557021513099">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.941495349529516">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.6780237296110723">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.16534727381665548"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6921223657707996"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.2735117513189824"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.86408438259771"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9770365213901364"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.31717711226001066"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.011340935618114889"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5073964382484912"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8462955186352437"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.23461155840372272"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.39312797787199205"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.940008718549143"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2822128367828598"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.02730736061984218"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8093258747491676"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.1522215526310864"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7677519532500581"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.10132312567412405"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9142718573402637"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
