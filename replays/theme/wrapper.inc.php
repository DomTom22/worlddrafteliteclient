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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3231274947351239" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.8060702174436396" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.9071574755249918" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.22214712144221926" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.9797406393153876" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.4434735418943787" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.5584975507495396"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.9334302030256283" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.45533538824399655">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.005373192496293644">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.2639744535027939">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.6622321510146625">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6174355093606496"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.1970192221770819"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.13161296295345282"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23371531443709603"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.15483024612943574"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18552091113896885"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.784691304079814"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.12519500012330953"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6491005787506829"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.48811602351426475"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9402891594963327"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6830779475232445"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8800811465555998"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3246952428268126"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.14928228612689987"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.24738339078039284"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7102678626393437"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.746252442496788"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.30359056936574524"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
