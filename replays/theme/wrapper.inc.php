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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.28587820118963725" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/panels.css?0.8188350434350073" />
	<link rel="stylesheet" href="//fantasyserver.glitch.me/theme/main.css?0.8325497273213696" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.25726154697838477" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.09664995049451885" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.46689441003332965" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyserver.glitch.me/?0.8408105038234175"><img src="//fantasyserver.glitch.me/images/pokemonshowdownbeta.png?0.26619635737028013" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12626072172312952">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19277636202984771">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyserver.glitch.me/ladder/?0.5209445452051285">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyserver.glitch.me/forums/?0.6240139211193987">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9966770288407067"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9440642079413861"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.44756310996934734"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6166705036940838"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6603224604768043"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9897176965801249"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9146020107286179"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8993258407704483"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.20049598780109656"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6628578290563343"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.7230429816912476"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3132828774888754"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.1961692399677868"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.2271426134636736"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5140188390079747"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.4529058682988334"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4102234362562853"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9849541070002064"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.35574815338544696"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
