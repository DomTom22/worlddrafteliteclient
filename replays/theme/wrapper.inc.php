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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.3902271800948096" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.25200319784251657" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.8356082395418973" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.06462759053470135" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.5997509196897746" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.5506347445553608" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.28919260179040807"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6192895585977667" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06904039028006448">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.053105653608225056">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.894633051565175">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.3235606822606054">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8732060679908618"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.2757702822674919"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.06471628393771867"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8608222651949728"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.7187213279278142"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4801867088780669"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.5900910319829289"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.3207920491161871"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.2789785277056491"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.893755429295902"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.3473516680721571"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6330000302645697"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.18888029955686392"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.845385228395316"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.6570979654911302"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.5546772469021157"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.42849710978259137"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.09263288600793884"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.2471651161345032"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
