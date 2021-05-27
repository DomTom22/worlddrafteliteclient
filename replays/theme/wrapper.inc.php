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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.34471915939547637" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.3912960947555493" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.1443766471379102" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.9741762549339812" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.28661460652391635" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.16817612722253283" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.9581484306163621"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.478190140883074" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7579852701902143">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6774686673001324">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8793574042945393">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.7798470909896063">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6254211099041271"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5152792801799402"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.4749691907296356"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9481412213205849"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.03520649773048512"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3530718841807323"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.8775965812594855"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.24716729184506248"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.46035893736924116"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.2759269532967683"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.9266043744516661"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.13953775548405112"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5848064847392132"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.31222426606275233"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.3999006431686425"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.41849318266080204"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5347309734672359"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.49778790616444324"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.8776409733805632"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
