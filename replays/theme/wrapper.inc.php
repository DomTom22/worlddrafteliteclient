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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.1399873701798411" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5395401663550219" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.8744257046263584" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4309836903444877" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.3365938550086123" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5967992100490336" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.07178793686762486"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9394667717420286" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12333285689710727">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.17159685725331308">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9875064830746099">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.02711377377359314">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8865908499760102"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.46317035825146413"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9084228858917509"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24595983369230834"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.33867377079587535"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5401999810980391"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.2890388467490488"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.652962612272119"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2926121522872045"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.22505460137737177"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.08590857989417766"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6299160184008505"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.4797994859551282"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.07186040745559374"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.2697906706605837"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.4941801028158763"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4568713081063098"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.48683350851576535"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.15038170580365384"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
