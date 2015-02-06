<?php

$social = array();
$social['title'] = "Bedgear Product Selector";
$social['description'] = "InsertDescriptionHere";
$social['image'] = "http://staging.click3x.com/bedgear/images/apple-touch-icon-114x114.png";
$social['link'] = "http://staging.click3x.com/bedgear";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?=$social['title']?></title>
		<meta name="description" content="<?=$social['description']?>">
		<meta name="author" content="Matthew Wilber">
		<meta property="og:title" content="<?=$social['title']?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?=$social['link']?>" />
		<meta property="og:image" content="<?=$social['image']?>" />
		<meta property="og:site_name" content="<?=$social['title']?>" />
		<meta property="fb:admins" content="631337813" />
		<meta property="og:description" content="<?=$social['description']?>" />
		<!-- Optimized mobile viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" media="all" href="css/responsiveboilerplate.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/main.css">
		<!-- HTML5 IE Enabling Script -->
		<!--[if lt IE 9]>
		<script src="libs/html5shiv.min.js"></script>
		<![endif]-->
	</head>
<body>
<div class="container">
		<!--There`s, place your columns right here!-->
		<!--Don't forget to use the class "content" outside the columns -->
		<!--To Start clear this code! -->

				<div class="content">
					<div id="intro" class="panel">
						SomeIntroHere
					</div>
					<div id="question1" class="panel">
						<a href="#" class="start">Start</a>
						<div class="questiongroup">
							<p class="number">#</p>
							<p class="question">loading...</p>
							<ul class="answers"></ul>
						</div>
					</div>
					<div id="question2" class="panel">
						<a href="#" class="back"> Back</a>
						<div class="questiongroup">
							<p class="number">#</p>
							<p class="question">loading...</p>
							<ul class="answers"></ul>
						</div>
					</div>
					<div id="question3" class="panel">
						<a href="#" class="back"> Back</a>
						<div class="questiongroup">
							<p class="number">#</p>
							<p class="question">loading...</p>
							<ul class="answers"></ul>
						</div>
					</div>
					<div id="question4" class="panel">
						<a href="#" class="back"> Back</a>
						<div class="questiongroup">
							<p class="number">#</p>
							<p class="question">loading...</p>
							<ul class="answers"></ul>
						</div>
					</div>
					<div id="question5" class="panel">
						<a href="#" class="back"> Back</a>
						<div class="questiongroup">
							<p class="number">#</p>
							<p class="question">loading...</p>
							<ul class="answers"></ul>
						</div>
					</div>
					<div id="question6" class="panel">
						<a href="#" class="back"> Back</a>
						<div class="questiongroup">
							<p class="number">#</p>
							<p class="question">loading...</p>
							<ul class="answers"></ul>
						</div>
					</div>
					<div id="question7" class="panel">
						<a href="#" class="back"> Back</a>
						<div class="questiongroup">
							<p class="number">#</p>
							<p class="question">loading...</p>
							<ul class="answers"></ul>
						</div>
					</div>
					<div id="resultgroup" class="panel">
						<h1>Your ideal Bedgear:</h1>
						<ol class="products"></ol>
					</div>
				</div>

		<!--Also on the same folder of this file have a demo.html with a basic style just for preview the columns-->
</div>
<!-- JavaScript at the bottom for fast page loading -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="libs/jquery-1.10.1.min.js"><\/script>')</script>
<script src="js/main.js"></script>
<script src="js/util.js"></script>
<script src="js/cPanel.js"></script>
<script src="js/cQuestion.js"></script>
<script src="js/cMultiChoice.js"></script>
<script src="js/cResult.js"></script>

<!-- If you need more than one script, we strong recommend to use the head.js.
 EX:
				<script src="libs/head.min.js"></script>
				<script>
						head.js("libs/jquery-1.10.1.min.js", "libs/respond.min.js", "js/custom.js" );
				</script>
-->

<!-- Google Analytics: change UA-XXXXX-X to your site's ID.-->
<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXX-X']);
		_gaq.push(['_trackPageview']);

		(function () {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
		})();
</script>

<script>
		//IE outdate friendly warning if you don't want remove it
		var $buoop = {vs: {i: 8, f: 3.6, o: 10.6, s: 3.2, n: 9}}
		$buoop.ol = window.onload;
		window.onload = function () {
				try {
						if ($buoop.ol) $buoop.ol();
				} catch (e) {
				}
				var e = document.createElement("script");
				e.setAttribute("type", "text/javascript");
				e.setAttribute("src", "http://browser-update.org/update.js");
				document.body.appendChild(e);
		}
</script>
</body>
</html>
