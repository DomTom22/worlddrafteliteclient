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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.380648292052012" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.04951145815319857" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.12581828884768598" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9319129893713636" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.47236892128641084" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8060148172849428" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.27911090188765764"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6248471843146886" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7706490893890359">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8405868474149001">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9706398146265796">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.2503902238439617">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.30478107481797245"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4050809637062043"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.4890540039777087"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6615593078790329"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5608365964067259"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8199100453284947"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.29262019163869346"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.7774265241052298"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9788518508322193"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9596490600251086"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9747577862367023"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9662189462545685"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.9368958329064763"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.07138455415445111"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7411787808591697"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.2994588479971618"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.22640702541871094"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4742053804096067"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.39811791734865354"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
