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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.6353213782023439" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.633478846914207" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.0794520475196292" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.03132352161964813" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.5789148250512739" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.4340218245839771" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.14208756361116137"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.609280445020405" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5774058310609411">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7666487453570903">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.8462655019088254">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.09861088071433799">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0372756459124608"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.5724800239448822"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7581075844790597"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4407105596312386"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.20012861582431563"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9014043385023451"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.2552115417423666"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.9499512112956201"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.38888035058422443"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.1380965355341044"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7632400410738116"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.6444849096105738"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.5207327468411596"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.0990307596081248"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.22573562239478617"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.3057143012129133"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.2869710023447867"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.6280575580854473"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6073885498393219"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
