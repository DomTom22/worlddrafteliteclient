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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7235777901887224" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.9866527584132583" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9608058558630936" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.010999446594279982" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6174853337952029" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.1812169191674533" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.7668810431600221"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.06357431152805271" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4335496103909007">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.33483018495494976">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.11992706636717432">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5154434186130745">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8757583487139273"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9690508376046232"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.7526401097694326"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7660192235625449"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5493406691044043"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6744050849768637"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.692312308236366"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.40228742146233976"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.427112666220675"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3077980602989836"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.08903768162353942"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.11717132012957454"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.21318557749064126"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.017458818426569156"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.3121395693215423"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3458006470865438"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.19942571427167755"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4529386872746639"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.756485999255198"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
