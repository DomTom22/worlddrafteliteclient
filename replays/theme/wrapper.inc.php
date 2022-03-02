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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7152512953324546" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5273658158105283" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.034377601389046664" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.644912501253557" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.5158788160277985" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5869438309632484" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5187439427777398"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.06497347456666436" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9268195001245509">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8920341849920137">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.8790862448870458">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8112162104740639">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.010999819469158956"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6140854732656025"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.7017179933751794"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9986349126299972"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.4036249124157192"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06345910243527797"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5035865267384245"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.2184849564132063"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5454756303838288"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.7728988498384393"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.024586949591217877"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.08988640670813197"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8934087706729232"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8388755495913209"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5862184336375824"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6796318204990013"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4033848478758837"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.09655783418569897"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.6350582677099179"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
