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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.19538521202161352" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.6443245062891148" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.36230335118502155" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.7302750659849286" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.1450539545304934" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.3325623026822586" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.10740976571015048"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.500094390641507" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2740340071582168">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5238495172131623">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.5065582103884161">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.15732433644126065">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.28125630408540214"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.674215889010783"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.21519956903310056"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15367278309972598"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.6115770995676393"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3674094554910312"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.1487431398322503"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8540813488646339"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.4665975029411551"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.7950625896311465"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7166383320256209"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.03940277868757658"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.583730120235203"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.8201632865519579"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.9859859612495239"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.17729151295002832"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.23006021041914093"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.44676725838620834"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.30424213658371935"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
