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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.1965545055833342" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.9292098193269192" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.16828357644609104" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.42830129494782954" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.09284881570298853" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.6138385419134169" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5196316316262548"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11669516842381644" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4956594585581633">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21412138171704176">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.6531380335928294">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.4633390789268672">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8595024410776428"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.057088809102793014"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.9453457745680847"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24645838306044943"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.00905094261637518"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6460489743142654"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.13768416831823105"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.2618744100150434"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.2784676735699261"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.855026110368984"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.5954557684104962"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.9194554881768902"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.01363950243737122"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.29333765945346335"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.9824585560264643"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.6536036840561825"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.5328906573038141"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.03392221386843941"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9244593886791914"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
