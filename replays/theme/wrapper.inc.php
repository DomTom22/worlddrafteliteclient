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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6265420707147464" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.22494053994585284" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.0024276494221906475" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.19046056726204785" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.3005389555712126" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.8255264383762275" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.6210522657941784"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0673656894764254" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2701027146078785">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08337751089768863">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.2777472843428299">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.4427466555893733">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22804570764950882"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.8397923250639177"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.6176040705880703"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7283290562118936"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.2535633316749526"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3181154336384475"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.20618416616697055"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.8684996049518128"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.27630396753044617"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.982431219626893"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.6007745438096594"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.4833055855508215"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.2930061414221259"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.5396601830664902"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9298995952865339"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.47193468966413277"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.4048519066878167"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.16535558790263893"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.1776515694988754"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
