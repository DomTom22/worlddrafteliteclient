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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6070175952475432" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.4151227415667109" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.4116277211595407" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4236878675071374" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8242313666677377" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.9978988468648031" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.19148947179926568"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11294756205732992" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9605808071935147">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09534942424599024">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.9068336513127562">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.48460382793580625">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7763291981927389"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8766940063144686"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.10854282840571172"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9516506233365976"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.4886644581847528"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5902719616900236"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.676511797665801"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.48510745447843107"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.10317001280566984"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.984950137551742"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.2601629071115421"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.033025945906987486"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.6330758226086921"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7547491096525749"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.509521946933627"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6132812349694998"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9362088372665125"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9398123639460663"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.8970642064689023"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
