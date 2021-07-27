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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.5233781278903717" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.7611138286450627" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.09123412542884046" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4129526299446695" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.4621614258436795" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.5456717705062577" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6813121231008756"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.28946834046263037" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4010404957698861">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5153693777377182">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.5892968716106155">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.8227280116067315">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.771678150542275"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.3626181240078923"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6676466705731718"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5478605602375182"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.1905531987476492"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0251205837823667"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.5190831060843906"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.6866239520208748"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.8246310913221424"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.9120128851573159"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.8146717450234036"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.3566781742131364"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.4617846002635637"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.7759432698892417"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.7987523660574756"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.5772287366461999"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5264071046785368"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9241495102521342"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.19170669990870604"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
