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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5379418524182922" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/panels.css?0.4009184084327355" />
	<link rel="stylesheet" href="//fantasy-showdown.herokuapp.com/theme/main.css?0.34362622764374584" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.8832416326212269" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.0790308275336098" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.41210789948103455" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/?0.030443963856045198"><img src="//fantasy-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5750854003931025" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.29951856675065525">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3810194424002511">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasy-showdown.herokuapp.com/ladder/?0.21442402701935093">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasy-showdown.herokuapp.com/forums/?0.6303076698495651">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7531246354103907"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.24140243062661426"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6113630987283496"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6495543751073352"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6569362370785017"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7836441728162222"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7102502386021243"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6909547809851033"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.29807165707269734"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5708171644026376"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.009609205696839318"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5571102047290668"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.7444743153153133"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8940986194223075"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7125333455019462"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.8533770483881116"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.14568475323506203"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8502516926220405"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.043153759059133545"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
