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
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/font-awesome.css?0.1719946495905964" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/panels.css?0.3460287761527805" />
	<link rel="stylesheet" href="//worlddraftelite.glitch.me/theme/main.css?0.955936133938861" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/battle.css?0.39951500781836" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/replay.css?0.7481674167666601" />
	<link rel="stylesheet" href="//wdeclient.herokuapp.com/style/utilichart.css?0.3612063553756715" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/?0.07952737419047162"><img src="//worlddraftelite.glitch.me/images/pokemonshowdownbeta.png?0.9737606874762688" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7600651008548338">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6498589057136701">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//worlddraftelite.glitch.me/ladder/?0.020960853236871246">Ladder</a></li>
				<li><a class="button nav-last" href="//worlddraftelite.glitch.me/forums/?0.6619234133742566">Forum</a></li>
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
	<script src="//wdeclient.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2923720958475764"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/lodash.core.js?0.8389297972596412"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/backbone.js?0.7747168961494222"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8817930152488689"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//wdeclient.herokuapp.com/js/lib/jquery-cookie.js?0.5974642928296126"></script>
	<script src="//wdeclient.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23874619803973873"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-sound.js?0.9854737937662585"></script>
	<script src="//wdeclient.herokuapp.com/config/config.js?0.8432341918963324"></script>
	<script src="//wdeclient.herokuapp.com/js/battledata.js?0.1935434462979324"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini.js?0.11678707400199628"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex-mini-bw.js?0.11136093033543348"></script>
	<script src="//wdeclient.herokuapp.com/data/graphics.js?0.08684314385161707"></script>
	<script src="//wdeclient.herokuapp.com/data/pokedex.js?0.6484725087560881"></script>
	<script src="//wdeclient.herokuapp.com/data/items.js?0.3447589764752377"></script>
	<script src="//wdeclient.herokuapp.com/data/moves.js?0.26031705592328613"></script>
	<script src="//wdeclient.herokuapp.com/data/abilities.js?0.7031112504649328"></script>
	<script src="//wdeclient.herokuapp.com/data/teambuilder-tables.js?0.2921168485543848"></script>
	<script src="//wdeclient.herokuapp.com/js/battle-tooltips.js?0.23000535547714063"></script>
	<script src="//wdeclient.herokuapp.com/js/battle.js?0.2322308175985801"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
