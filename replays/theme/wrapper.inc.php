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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5298813656322017" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.37053188504824686" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.7982982495455662" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9751079581447963" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8859661627563864" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.9795832492745489" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8489014810671578"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5167593545596314" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7150473492633131">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8625398797602257">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.024499228936512907">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.2888048381529229">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9283610144698249"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.812745148473017"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.8879164303496265"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9114403547906949"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.9755424203603613"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6406174539998479"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.25191367894856653"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.0029525623029176273"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.5487932920250542"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.093625498606976"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.18773408770626232"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.21373737664531012"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.7144410239374199"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.2157990594500785"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.21840902706554388"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.04100847740611213"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5433616296205546"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.886741684007512"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9379523508354073"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
