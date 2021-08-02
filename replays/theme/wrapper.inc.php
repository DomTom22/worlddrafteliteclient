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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.04983647655450674" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.3614249246839123" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.2261236205947177" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.929698055329762" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.3525779906802531" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.03509458746989402" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.14247661398265032"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5748976169539235" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.260268802735538">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5361692126872337">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.05159911831906783">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.9423200438256736">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5262691353993294"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4198767081820858"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.8933498903470118"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4937561683638312"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6073075540709176"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06354510288338577"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.04083246053646006"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.834583855963092"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.24808715299601047"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.3323273357072496"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.8593849793857553"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.25749716580470206"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.24859757829048124"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.3884579079431756"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6865169943381553"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6409348737693197"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.15481104517387623"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.6898378372071308"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.12688323448609307"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
