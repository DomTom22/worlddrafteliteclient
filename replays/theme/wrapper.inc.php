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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.4148976055895275" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.8417376462802777" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.3895697439732959" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.09664519712384001" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.5428922111126191" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.6183011587999347" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.16068532949545022"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.24464005687821655" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.684119429731139">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3957359738641584">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5445791785704102">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.09603821798188283">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.17794379519466408"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.36884789702258125"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.41787053323196566"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6687356977037775"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.6409427401947669"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5711464421186849"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.6161248290886019"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.5598158244336882"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.3847636508682788"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.9725175005611906"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5687831691807164"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.7541715691267681"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.6694284658099487"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8862531821642017"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.5057941418004472"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.4054919501443761"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5713812657405852"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.7870763824138611"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.45305075158980945"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
