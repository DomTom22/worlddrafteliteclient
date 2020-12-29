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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.03888245718570116" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.13612019323857294" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.9205187263651069" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7086934429013503" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8513127002597487" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.09907167678417328" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.36659546076078087"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.8698787215208532" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11885411898416498">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5473728538448126">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.1806468649066335">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.030683833066715183">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2057651417729358"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3771443758077053"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.41888490278085233"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04735732436366691"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8744065430851049"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7174455395077954"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.28160502034900436"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2785533335754464"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4290366631710063"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7193179813897483"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8382805601750447"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8445486680299661"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.07438303420913561"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8443994610941481"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09266577502557993"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9676195644568404"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9150203513921573"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7085665058980324"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2717630987903088"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
