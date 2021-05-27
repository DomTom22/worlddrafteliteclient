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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.9329839862637133" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.17174483851460054" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.6459839793099587" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.3451365041307093" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.15862296038190715" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9563264269684835" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5511823079148861"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.46976339888682195" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5863482222242937">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9549557092524166">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5071391927758542">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.7554106362050022">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7416685807631127"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.03894894816012617"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.3426165448338363"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5744001629190443"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.505491766077957"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.88062035437241"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9571166732677372"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.36885861032398526"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.29826604165169934"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.1393541328617558"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.10246818782788614"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.29999035101328286"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.468107954196449"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.6123584098429435"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.4695308893664212"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.22784922953821996"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.46558024982934243"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.5567468124841424"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.02827513150217631"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
