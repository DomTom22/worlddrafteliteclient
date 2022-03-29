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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.970253160619273" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5871392749253939" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.47930658823976335" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.2602357484350746" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.39375762495963174" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.4348740917639038" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.3256923374687182"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.33620398218422287" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8106705895515727">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9568387779477474">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5963748264318947">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.10699218103496455">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6593530378391825"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6348705371750851"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.30175438870082827"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08346926928684129"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.2640581261230712"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8345553294678729"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.0021773086387013585"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.07730326376910446"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.03731991107873389"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.6792144438497583"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.4416793386854245"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.4469222643384396"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.211726094267229"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.6396711951157303"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5089578739017024"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.8633590920642644"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9686885665685101"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.8805854076363067"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.3649971838559418"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
