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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8028495094876713" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8166751748561518" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.86724087716247" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7572476634670438" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.22768189272181538" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.988593939007189" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9882588664255083"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.004793525121959075" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7780785835147475">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8713464853844743">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9168431696426715">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6983649169246333">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27967204148906966"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2247032880964075"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8426843479476811"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3743688696610725"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.17352123746091297"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6027802126240271"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9324607069462096"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.11650138029882795"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.052907108761460764"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.47575597910956313"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3461077422158161"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7430545833947451"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7775659717966927"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8136376931742042"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.22333719507279315"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4519180780457397"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4959368949818832"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.11275387629605227"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.06780927788903823"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
