<?php

$social = array();
$social['title'] = "Bedgear Product Selector";
$social['description'] = "InsertDescriptionHere";
$social['image'] = "http://staging.click3x.com/bedgear/images/apple-touch-icon-114x114.png";
$social['link'] = "http://staging.click3x.com/bedgear";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
        <!-- icons -->
        <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="icons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="icons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="icons/manifest.json">
        <link rel="shortcut icon" href="icons/favicon.ico">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="icons/mstile-144x144.png">
        <meta name="msapplication-config" content="icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <!-- end icons -->
        <link rel="stylesheet" type="text/css" media="all" href="css/responsiveboilerplate.css">
        <link rel="stylesheet" type="text/css" media="all" href="css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="css/jquery-ui.structure.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="css/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/master.js"></script>
        <script type="text/javascript">
            var base_url    = "";
            var root_dir    = "";
            var debug       = "";
        </script>
        <!--[if (lt IE 9)]><!--><script src="js/vendor/respond.min.js"></script><!--<![endif]-->
    </head>
        <!--[if IE 8 ]><body class="ie8"><![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!--><body><!--<![endif]-->

        <div class="site-wrapper">
            <div id="header-container">

            </div>

            <div id="page-container">
                <div id="page-content">
                    <div id="question" class="panel"></div>
                        <script type="text/template" id="question1-template">
                            <% if( questionNumber == 1 ){ %>
                            <a href="#" class="start">Start</a>
                            <% }else{ %>
                            <a href="#" class="back">Back</a>
                            <% } %>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <p class="question"><%= questionText %></p>
                                <ul class="answers singlechoice">
                                <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><button answerSelected="false" answerId="<%=answers[answer].answerId%>" answerBitpos="<%=answers[answer].answerBitpos%>"><%=answers[answer].answerText%></button></li>
                                <% } %>
                                </ul>
                            </div>
                        </script>
                        <script type="text/template" id="question2-template">
                            <% if( questionNumber == 1 ){ %>
                            <a href="#" class="start">Start</a>
                            <% }else{ %>
                            <a href="#" class="back">Back</a>
                            <% } %>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <p class="question"><%= questionText %></p>
                                <ul class="answers singlechoice">
                                <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><button answerSelected="false" answerId="<%=answers[answer].answerId%>" answerBitpos="<%=answers[answer].answerBitpos%>"><%=answers[answer].answerText%></button></li>
                                <% } %>
                                </ul>
                            </div>
                        </script>
                        <script type="text/template" id="question3-template">
                            <% if( questionNumber == 1 ){ %>
                            <a href="#" class="start">Start</a>
                            <% }else{ %>
                            <a href="#" class="back">Back</a>
                            <% } %>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <p class="question"><%= questionText %></p>
                                <ul class="answers singlechoice">
                                <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><button answerSelected="false" answerId="<%=answers[answer].answerId%>" answerBitpos="<%=answers[answer].answerBitpos%>"><%=answers[answer].answerText%></button></li>
                                <% } %>
                                </ul>
                            </div>
                        </script>
                        <script type="text/template" id="question4-template">
                            <% if( questionNumber == 1 ){ %>
                            <a href="#" class="start">Start</a>
                            <% }else{ %>
                            <a href="#" class="back">Back</a>
                            <% } %>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <p class="question"><%= questionText %></p>
                                <ul class="answers singlechoice">
                                <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><button answerSelected="false" answerId="<%=answers[answer].answerId%>" answerBitpos="<%=answers[answer].answerBitpos%>"><%=answers[answer].answerText%></button></li>
                                <% } %>
                                </ul>
                            </div>
                        </script>
                        <script type="text/template" id="question5-template">
                            <% if( questionNumber == 1 ){ %>
                            <a href="#" class="start">Start</a>
                            <% }else{ %>
                            <a href="#" class="back">Back</a>
                            <% } %>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <p class="question"><%= questionText %></p>

                                <div id="tempscale">
                                	<span style="float:right">Hot</span>
                                	<span style="float:left">Cold</span>
                                </div>
                                <div id="temperature" class="slider"></div>
                                <ul>
                                    <li class="sliderselect" style="display: list-item; opacity: 1; margin-left: 0px;"><button>Next</button></li>
                                </ul>
                            </div>
                        </script>
                        <script type="text/template" id="question6-template">
                            <% if( questionNumber == 1 ){ %>
                            <a href="#" class="start">Start</a>
                            <% }else{ %>
                            <a href="#" class="back">Back</a>
                            <% } %>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <p class="question"><%= questionText %></p>
                                <ul class="yesno">
                                    <li><button class="yes">Yes</button></li>
                                    <li><button class="no">No</button></li>
                                </ul>
                                <ul class="answers multichoice" style="display:none;">
                                    <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><input type="checkbox" value="<%=answers[answer].answerId%>"><label><%=answers[answer].answerText%></label></li>
                                    <% } %>
                                    <li style="display: list-item; opacity: 1; margin-left: 0px;"><button>Next</button></li>
                                </ul>
                            </div>
                        </script>
                        <script type="text/template" id="question7-template">
                            <% if( questionNumber == 1 ){ %>
                            <a href="#" class="start">Start</a>
                            <% }else{ %>
                            <a href="#" class="back">Back</a>
                            <% } %>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <p class="question"><%= questionText %></p>
                                <ul class="yesno">
                                    <li><button class="yes">Yes</button></li>
                                    <li><button class="no">No</button></li>
                                </ul>
                                <ul class="answers multichoice" style="display:none;">
                                    <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><input type="checkbox" value="<%=answers[answer].answerId%>"><label><%=answers[answer].answerText%></label></li>
                                    <% } %>
                                    <li style="display: list-item; opacity: 1; margin-left: 0px;"><button>Next</button></li>
                                </ul>
                            </div>
                        </script>

                    <div id="result" class="panel">
                        <script type="text/template" id="result-template">
                            <h1>Your ideal Bedgear:</h1>
                            <ol class="products">
                                <% for( product in data ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><%=data[product].productName%></li>
                                <% } %>
                            </ol>
                            <div class="profile">
                            <% if( sessionId == "" ){ %>
                                <h2>Loading...</h2>
                            <% }else if( sessionId == "done" ){ %>
                                <h2>Thank You!</h2>
                            <% } else { %>
                                <h2>Sign up for more information:</h2>
                                <form>
                                    <input type="hidden" name="surveyUUID" value="<%= sessionId %>"/>
                                    <input type="text" name="profileEmail"/>
                                    <input type="submit"/>
                                </form>
                            <% } %>
                            </div>

                        </script>
                    </div>
                </div>
            </div>

            <div id="footer-container">

            </div>
        </div>

        <script data-main="js/main" src="js/vendor/require.min.js"></script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create',"XXXXXXXX");ga('send','pageview');
        </script>
    </body>
</html>
