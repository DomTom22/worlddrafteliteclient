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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.09246950108997698" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.6746780514007236" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.48667785876945047" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.31267410524442507" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.341865835291288" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.21263494430024998" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.21357290040621102"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.36289374350794" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6279285899180755">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7692656781138207">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.2925423601214563">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.9403423660853019">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.35352991561918"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.46845255691458143"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6090600148438889"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29262002135244614"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.6929314585320472"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8806896335414387"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9943961717790699"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9471570167746781"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8291667516680084"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9689409575370644"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.2148997910762498"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.43810209592673366"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.04047611983036137"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7158840658371535"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.11094887624485406"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3117080800862233"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9397422835352673"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8491143463201909"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.84337735090772"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
