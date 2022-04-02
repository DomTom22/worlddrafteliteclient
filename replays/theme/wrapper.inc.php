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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.307859280189392" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.3750466411587696" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.4139708612151112" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.0233035143715834" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.7248805563998901" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.09338434578724963" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.602454448242381"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5944259269135148" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5048553362285759">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6627260077404662">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.2123347664271209">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.5749841987883335">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6235733306010243"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.27829793639492495"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.5126698443822308"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.817949305007674"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.05385152975653695"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2958046901433413"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.7008831450327571"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.5414281423722711"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.15569604848444318"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.34408282736901863"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.3144209607046837"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.8062431542454938"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.47346352374869927"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.22374040544357077"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7439413061386311"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5263184316162275"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.09315874385263978"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.985538891126454"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9366966506316421"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
