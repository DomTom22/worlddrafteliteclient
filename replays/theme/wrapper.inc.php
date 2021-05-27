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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.5083328485421676" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.7702126276789358" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.36016084032074414" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.6044650094724147" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.6643146782250648" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.15056706506077355" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.47847210937190243"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.6998609229277581" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9968033090587258">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.030156766873752572">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8115232247680157">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6784360882197547">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9266554783889276"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.9305774786894643"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.8566334062766876"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39722863620929694"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.40891037430733834"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8734814908873589"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.7588033030962669"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.6411947877964854"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.8624856149223343"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.7451176374137829"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.519630420512059"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.9159803175057997"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.24716476362271522"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.5307089476400448"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.24705916999235011"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.7321673648198286"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.6794871285720443"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.06276095218457"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.04225572533846211"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
