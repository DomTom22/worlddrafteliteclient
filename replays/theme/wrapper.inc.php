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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.07854004013169402" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.5588105980885743" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.9135078726375125" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.4110869243329325" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6941271057972425" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.7322707641739812" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.33668367422918744"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2197432317909671" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7410751375261917">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22822341304451488">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.889348792130249">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.377730575132049">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9991912230981428"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.015446974219395226"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.33785911382297606"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7289075772573552"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.30393524522245885"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7375833147764701"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.9548108603102425"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.30853617482376405"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.9083422804742864"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.09605190106171912"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.2188069560143493"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.6841663791291785"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.4508817066863242"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.2784546143409432"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.6288696028527014"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.15055498538983447"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.9506143877159263"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.4090130018972413"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9888910533807027"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
