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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.8831329898376228" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.20178386534714066" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9114535119887761" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.44651158559263915" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7302390494936541" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.7847602369002926" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5014072592803032"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.7641678504197709" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2685990367289235">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5333972051422693">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.11779067777696417">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.20408804834808092">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08710935540923681"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.7555420264124262"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.4183467311073725"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7854880557390327"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.34556889276809577"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8708306921399116"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5492429779888113"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.281083832263503"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.12595807542766324"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.009227561574070675"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.21708882876787072"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.1290167666897597"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.2557809762343759"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.03055303156634448"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.5663777395794554"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.6255762833352259"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.31084948744712526"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.8980540085189637"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6004475596195216"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
