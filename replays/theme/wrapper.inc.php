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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.013691031999696568" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.0018965966699062697" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.6764387706464017" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.21787293002409625" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.6434684090045792" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.668787028773669" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.2240677135187037"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4251401418524867" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.057557148490118726">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3001606682056357">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.7476112828737072">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.7396047482668762">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8216587083551867"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.9637147904007983"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.49491648113496756"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3872167966987681"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.5390434956292764"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2141558956591043"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.6281148343702454"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.43529545955430615"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2628575027508837"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.25059478544386726"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9568589886638359"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.903411665742011"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.5269748667898533"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.40996170477842075"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5200163624452825"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.9376325746494285"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.49616063110285524"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.5422378805752694"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.13475189715083125"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
