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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.025693165280086028" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.924563653512197" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.7268656865640846" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.38899769876772194" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7491999148869073" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.9456575132357512" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.975485408861027"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6331568554621863" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3921711741904923">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09693048831065942">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5070633876528232">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.42258893940024933">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7957353770416993"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.4260856856275963"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.3517205699693833"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8898138798893196"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.06421514306697307"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6364573618995415"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9957770465223208"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.5710545546415886"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.6328525314333349"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.4888096214572688"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.6935247698175311"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.1357577957261773"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.8614579810584373"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.02707969800264909"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6621827426762417"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.715321194594045"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.5116117728820664"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.4693804149555749"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.7852862122696584"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
