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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.6394405598221131" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.15440948905009555" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.6705955488603581" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.056910337288486934" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8191998547605206" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.3185924955934163" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.7128653779041909"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.807709951520287" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5441640559404681">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.49355509682529775">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.7285783661419856">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.12465904429786501">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34680664429783103"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.4875896256189216"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.11823823785780907"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8298189299989795"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.2073196169101248"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3657016441630485"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.3984335723579362"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.9309865041652534"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.6523058625596008"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.8652659157133984"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.3038841740725684"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.551396741243176"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.8929748705002984"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.8869285037505783"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.5898104391134036"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.3144591028980175"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.41432329100781184"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.7000339672158824"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.9882433590711537"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
