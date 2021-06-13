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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6580464955710772" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.3070769263596709" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.9313411752322669" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.9995829309701563" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.823535414114231" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.03930570521421717" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5385238309392619"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6454008998916649" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19858623957195598">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13677414736157">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.08062279478798273">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.12582946922035343">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6919501450435164"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.6268520585378061"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.24435200534770507"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6373268653754791"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.1642453333510452"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7012616669117617"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.34612891128508094"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6860410295158976"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.38858015288499503"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.962972787377308"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6007541474970388"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.3546104680455322"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.27784961656562435"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.14699545143156412"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.12937334348490515"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.24828675165253467"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.7183702781152794"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.477129214584713"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.951638846826897"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
