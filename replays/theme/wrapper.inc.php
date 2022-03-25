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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.7986192807940271" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.44759935377183035" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.10305758031275758" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.12348323660359606" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.11696280168717554" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6343595534721989" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.46697482845015514"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8312218194556935" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5227253616619143">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1493200618467514">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.568488621328777">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8230830901382526">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24550944468592184"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.5531461695039523"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.37936327716831"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7151531407494043"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.23791538685665548"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8384060102357591"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6113592939431993"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.2124336344457276"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2538081305570097"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9145955577137761"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.20972938808694508"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.592949424102438"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.3512338379250597"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5475678751480677"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.1531865535949657"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5959152223510991"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.7285888219454253"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8281916333606223"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9493504304119231"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
