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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.46703223823942475" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.5629618091700752" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.28364082381804545" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.017840726336923796" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.011648453289754945" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7779402440888075" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.7347888321511333"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.6483372295139807" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9018956418164976">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8332788451992801">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.03245904854753179">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.9958330560193329">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4995324058708539"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5808661085253979"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5811339018832362"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9741163221937883"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10600107476110354"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14113387761680696"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6774880375824053"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5672329778188332"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.18571461170191994"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.20380002752189563"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5921300110405521"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.33771275999230066"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5765700724368421"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.26811009706023436"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4008630149298489"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8822110611448357"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.28308258170405676"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14576691991558555"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.08000689434175645"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
