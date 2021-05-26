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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.1896772734028267" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.938768801178929" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.38063378710058826" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.5829653759126443" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.9385509509749372" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.016325161479530337" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.7781280518286067"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.06847152980069438" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6584355226867613">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4270663058196671">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.2069268157397932">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.29449058454793464">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7570818356666207"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.7380954279801013"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7920064590346012"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8314014239690508"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.33045450344607374"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9570419142526208"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.3141622477935997"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.817600185113756"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.4732043705907525"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.09411975017742913"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.7109893370516547"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.1674290321673828"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.11616152589574646"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.7877416605062297"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.4509814565067496"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.688039903983436"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.2977759313863384"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.2836672908278819"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.6190196996857438"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
