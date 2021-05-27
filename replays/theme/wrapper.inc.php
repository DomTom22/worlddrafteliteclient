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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.0924383472976249" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.15471376971348372" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9353357401040077" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.772863274999066" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6966200587300189" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.24913409738033687" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.12282950565615813"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.9662161878939077" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8620341068708568">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4185720983953909">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.44368002103253956">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.036652216601498866">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07104258744389114"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5186435727083307"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.5941422055256327"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8393019186334312"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.011371051974210289"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6445206928955254"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.2561361675689722"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6360224819495741"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.74479655824496"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.5804984014887906"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.5104962180457999"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.5390991699933227"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.08560253553069774"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.3991938800785775"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.3037663987343411"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.134334091827657"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.8640889760950103"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.45375174819170616"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.49320672050705583"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
