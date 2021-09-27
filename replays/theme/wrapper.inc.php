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
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/font-awesome.css?0.44323130119721355" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/panels.css?0.7123873104515799" />
	<link rel="stylesheet" href="//fantasyshowdown.herokuapp.com/theme/main.css?0.23586392183171334" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/battle.css?0.7657822734701916" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/replay.css?0.8550262611981989" />
	<link rel="stylesheet" href="//fantasyclient.herokuapp.com/style/utilichart.css?0.9683149946108378" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/?0.5524494202931607"><img src="//fantasyshowdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4684143128762621" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7101672064939819">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7124940698302518">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fantasyshowdown.herokuapp.com/ladder/?0.7803445777084193">Ladder</a></li>
				<li><a class="button nav-last" href="//fantasyshowdown.herokuapp.com/forums/?0.6233549035218597">Forum</a></li>
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
	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7714068429381866"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/lodash.core.js?0.6479436155373743"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/backbone.js?0.25285197800180703"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13319370499403194"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fantasyclient.herokuapp.com/js/lib/jquery-cookie.js?0.30256714664421325"></script>
	<script src="//fantasyclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.25347246954029967"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-sound.js?0.29953995403815514"></script>
	<script src="//fantasyclient.herokuapp.com/config/config.js?0.1988020235030672"></script>
	<script src="//fantasyclient.herokuapp.com/js/battledata.js?0.14480881176150273"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini.js?0.2771239658015048"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex-mini-bw.js?0.9672296738713502"></script>
	<script src="//fantasyclient.herokuapp.com/data/graphics.js?0.48400506868049264"></script>
	<script src="//fantasyclient.herokuapp.com/data/pokedex.js?0.1322382304961689"></script>
	<script src="//fantasyclient.herokuapp.com/data/items.js?0.829907841182651"></script>
	<script src="//fantasyclient.herokuapp.com/data/moves.js?0.8779736857033138"></script>
	<script src="//fantasyclient.herokuapp.com/data/abilities.js?0.2053500414622058"></script>
	<script src="//fantasyclient.herokuapp.com/data/teambuilder-tables.js?0.865875964040854"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle-tooltips.js?0.9402455210370457"></script>
	<script src="//fantasyclient.herokuapp.com/js/battle.js?0.7944259523765946"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
