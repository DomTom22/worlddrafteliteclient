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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.3608683725991795" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.22096968338934797" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.604678391589283" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.9817014155229511" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.34639408867499655" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.4348890542336412" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.19271266771134776"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7037827866921111" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3432551411121303">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20383749522859906">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.029699610741695803">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.24356556587483613">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.49750164459041946"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.26013648678504375"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6667683829823638"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3954998911760017"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.4496427460499075"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.796486838608351"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9905757035217277"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.40118018573312897"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9279748753950747"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.5382785810808877"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.17537358805947512"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.5449838855668809"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8356464442584277"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5640095239691485"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8691941029640209"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3083169460525703"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.1865787206580365"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8360312837909769"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.44201177772340694"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
