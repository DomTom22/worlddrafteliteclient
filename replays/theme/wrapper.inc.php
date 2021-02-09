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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.512226621997572" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4635701775668506" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8579960084318483" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9549119889204813" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.24282062890748857" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7580519953402645" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5965023509103478"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.44443490146207365" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9558749337562631">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6387314977799763">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8038717037951737">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.0975685672366815">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.624868308557764"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.11413831739167013"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9078451891686972"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.965749622518199"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3569161016730631"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07792517523777898"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.34379339994985614"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7176529151766096"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1783293197446174"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6189365407554521"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.822780773723526"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.20986312321260225"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.046309342962177924"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9217018883641948"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6934500120911122"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4259230156752696"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3944875860797188"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6647406387348604"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3951118793178816"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
