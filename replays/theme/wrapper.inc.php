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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.17909246506734622" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.8215006020928082" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.12455891094525229" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8788756343189039" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.4289172379414128" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.03149718284850378" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6864042032496749"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08973261030217827" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22805529978553318">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11183061461197674">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.4688452923566524">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.671322680771816">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.28640575453114403"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8227888569964932"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.33178947075023046"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6112487437947247"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.08677326083905568"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5825399306724717"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.1506406839611243"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7057439121905322"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8311823936889409"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.010051654159626722"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.4105168279732687"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.07996934651956589"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.19939855411310003"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.07215049352715908"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.22401477031715777"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.24033619028300213"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5186088681733414"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.1688276019362187"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.34044944907533736"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
