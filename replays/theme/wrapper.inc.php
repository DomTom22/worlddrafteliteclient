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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6924599621941125" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.14318086657301854" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.49569140888233054" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.03141371267103987" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6329330005260492" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.3178986289654504" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.8848621928482732"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.19883054541662015" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41198631799372554">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6194274150830534">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.3687796190152459">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7203610504864759">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.43266684224898877"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.7141173335164297"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.23186992261726536"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8152118163312241"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.14103827622792497"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.017027490279805546"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6285392645061119"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9173194535128035"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.3498153778475952"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.2931331360349456"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9258346555365298"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.0261015448040669"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5436072798989191"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.48723327426040797"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6346698207404013"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.20678161558525554"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.2561801481121333"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5429722063611646"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.7732906413206786"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
