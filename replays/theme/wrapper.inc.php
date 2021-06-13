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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.7317866646130562" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.8215859266355006" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.5072033297566143" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.1053201302366642" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.1154156358206666" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.24507739849062427" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.5700642703326333"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.8439781029528208" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5438226176604017">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5897984233527704">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.08548152826712996">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.5430691279940163">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.001601054588096007"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.3991148384563932"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.6653204914597115"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6129567998373839"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.8050092424632829"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15445225940072005"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9593172203942677"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6336081550320145"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.9975509238404388"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.9593281340747979"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9272028094070817"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.5658503212329422"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.8607843675906357"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.18803411565917005"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.8497939361026559"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.654806769478504"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6400856813159694"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.5810811001510108"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.0367414050177024"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
