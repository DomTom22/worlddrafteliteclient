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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.8770676706561911" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.949496027596326" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.8079835014898611" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.5169804960367081" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.10528961590298302" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8910734032719634" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.9016912096347138"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.6981663333487587" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.034680886453841264">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06115278135297042">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.03197825672546917">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.38942651647352355">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5402561285605056"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.10076820114915241"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9196479883604316"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6465090919011431"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.8769808627810416"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8779637393351294"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.306505001246411"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7225315674489017"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6026561766759571"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.521744090658876"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.23357214225282563"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3240884452485344"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.20461670931741782"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7748122964050976"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.514044337738214"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6889392089142528"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9990322347852281"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.1664299243234615"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8818735129201059"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
