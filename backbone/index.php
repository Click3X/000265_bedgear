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
        <link rel="stylesheet" href="css/gotham.css">
        <link rel="stylesheet" href="css/gotham_narrow.css">
        <link rel="stylesheet" href="css/swoop.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/panel_intro.css">
        <link rel="stylesheet" href="css/panel_one.css">
        <link rel="stylesheet" href="css/panel_two.css">
        <link rel="stylesheet" href="css/panel_three.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/1.5.2/raphael-min.js"></script>
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
                    <div id="intro" class="panel">
                        <script type="text/template" id="intro-template">

                            <div id="frame6" class="swoop" src=""></div>
                            <div id="mask6" class="mask" src=""></div>
                            <div id="frame5" class="swoop" src=""></div>
                            <div id="mask5" class="mask" src=""></div>
                            <div id="frame4" class="swoop" src=""></div>
                            <div id="mask4" class="mask" src=""></div>
                            <div id="frame3" class="swoop" src=""></div>
                            <div id="mask3" class="mask" src=""></div>
                            <div id="frame2" class="swoop" src=""></div>
                            <div id="mask2" class="mask" src=""></div>
                            <div id="frame1" class="swoop" src=""></div>
                            <div id="mask1" class="mask" src=""></div>
                            <!--<span class="bubble">
                                <span class="glow"> </span>
                            </span>-->
                            <div id="canvas"></div>
                            <div class="questiongroup">
                                <h1>Discover the ultimate performance pillow<span>Determine the right pillow for you</span></h1>
                                <a href="#" class="start">Start</a>
                                <div class="avatargroup">
                                    <div class="avatar">
                                        <img src="img/avatar_male.png"/>
                                    </div>
                                    <div class="avatar">
                                        <img src="img/avatar_female.png"/>
                                    </div>
                                </div>
                                <!--<a href="#" class="animate">Animate</a>-->
                            </div>
                        </script>
                    </div>
                    <div id="question" class="panel"></div>
                        <script type="text/template" id="question1-template">
                            <div id="frame6" class="swoop" src=""></div>
                            <div id="frame5" class="swoop" src=""></div>
                            <div id="frame4" class="swoop" src=""></div>
                            <div id="frame3" class="swoop" src=""></div>
                            <div id="frame2" class="swoop" src=""></div>
                            <div id="frame1" class="swoop" src=""></div>

                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>
                                <div class="answers singlechoice avatargroup">
                                    <a href="#" class="avatar male" style="background-image:url('img/avatar_male.png')" answerSelected="false" answerId="<%=answers[0].answerId%>" answerBitpos="<%=answers[0].answerBitpos%>">
                                        <span><%=answers[0].answerText%></span>
                                    </a>
                                    <a href="#" class="avatar female" style="background-image:url('img/avatar_female.png')" answerSelected="false" answerId="<%=answers[1].answerId%>" answerBitpos="<%=answers[1].answerBitpos%>">
                                        <span><%=answers[1].answerText%></span>
                                    </a>
                                </div>
                            </div>
                        </script>
                        <script type="text/template" id="question2-template">
                            <a href="#" class="back">&lt;</a>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>
                                <ul class="answers singlechoice">
                                <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><a href="#" answerSelected="false" answerId="<%=answers[answer].answerId%>" answerBitpos="<%=answers[answer].answerBitpos%>"><%=answers[answer].answerText%></a></li>
                                <% } %>
                                </ul>
                            </div>
                        </script>
                        <script type="text/template" id="question3-template">
                            <a href="#" class="back">&lt;</a>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>
                                <h2 class="beta">In which position do you usually fall asleep?</h2>
                                <h2 class="gamma">In which position do you usually wake up?</h2>
                                <ul class="multichoice" style="display:none;">
                                    <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><input type="radio" name="sleeppos" answerText="<%=answers[answer].answerText%>" answerId="<%=answers[answer].answerId%>" value="<%=answers[answer].answerBitpos%>"><label><%=answers[answer].answerText%></label></li>
                                    <% } %>
                                </ul>
                                <ul class="answers sleeppos alpha">
                                    <% for( answer in answers ){ %>
                                        <li style="display: list-item; margin-left: 0px;"><a href="#" class="spsub" answerSelected="false" answerId="<%=answers[answer].answerId%>" answerBitpos="<%=answers[answer].answerBitpos%>"><%=answers[answer].answerText%></a></li>
                                    <% } %>
                                </ul>
                                <ul class="answers sleeppos beta">
                                    <li><a id="" href="#" class="" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_stomach.png'); width: 334px;"></a></li>
                                    <li><a id="" href="#" class="" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_back.png'); width: 220px;"></a></li>
                                    <li><a id="" href="#" class="" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_side.png'); width: 348px;"></a></li>
                                </ul>
                                <ul class="answers sleeppos gamma">
                                    <li><a id="" href="#" class="spadvance" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_stomach.png'); width: 334px;"></a></li>
                                    <li><a id="" href="#" class="spadvance" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_back.png'); width: 220px;"></a></li>
                                    <li><a id="" href="#" class="spadvance" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_side.png'); width: 348px;"></a></li>
                                </ul>
                                <a href="#" class="continue spcontinue">Continue</a>
                            </div>
                        </script>
                        <script type="text/template" id="question4-template">
                            <a href="#" class="back">&lt;</a>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>
                                <ul class="answers singlechoice">
                                <% for( answer in answers ){ %>
                                    <li style="display: list-item;"><a href="#" answerSelected="false" answerId="<%=answers[answer].answerId%>" answerBitpos="<%=answers[answer].answerBitpos%>"><%=answers[answer].answerText%></a></li>
                                <% } %>
                                </ul>
                            </div>
                        </script>
                        <script type="text/template" id="question5-template">
                            <a href="#" class="back">&lt;</a>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>
                                <div class="answers temperature">
                                    <div id="tempscale">
                                        <img class="flare" src="img/temperature_flare.png"/>
                                        <table id="temptable" border="1">
                                            <tr>
                                                <td colspan="2" width="10%" style="text-align:center;">Cold</td>
                                                <td colspan="1" width="40%">&nbsp;</td>
                                                <td colspan="1" width="40%">&nbsp;</td>
                                                <td colspan="2" width="10%" style="text-align:center;">Hot</td>
                                            </tr>
                                            <tr>
                                                <td width="5%" style="border-right:solid 1px #fff;">&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="border-right:solid 1px #fff;">&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="border-right:solid 1px #fff;">&nbsp;</td>
                                                <td width="5%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6">
                                                    <div id="temperature" class="slider"></div>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                    <a href="#" class="continue tempcontinue">Continue</a>
                                </div>
                            </div>
                        </script>
                        <script type="text/template" id="question6-template">
                            <a href="#" class="back">&lt;</a>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>

                                <div class="answers">
                                    <ul class="yesno">
                                        <li><a href="#" class="yes">Yes</a></li>
                                        <li><a href="#" class="no">No</a></li>
                                    </ul>
                                    <ul class="multichoice" style="display:none;">
                                        <% for( answer in answers ){ %>
                                        <li style="display: list-item; margin-left: 0px;"><input type="checkbox" value="<%=answers[answer].answerId%>"><label><%=answers[answer].answerText%></label></li>
                                        <% } %>
                                    </ul>
                                    <a href="#" class="continue regcontinue">Continue</a>
                                </div>
                            </div>
                        </script>
                        <script type="text/template" id="question7-template">
                            <a href="#" class="back">&lt;</a>
                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>

                                <div class="answers">
                                    <ul class="yesno">
                                        <li><a href="#" class="yes">Yes</a></li>
                                        <li><a href="#" class="no">No</a></li>
                                    </ul>
                                    <ul class="multichoice" style="display:none;">
                                        <% for( answer in answers ){ %>
                                        <li style="display: list-item; margin-left: 0px;"><input type="checkbox" value="<%=answers[answer].answerId%>"><label><%=answers[answer].answerText%></label></li>
                                        <% } %>
                                    </ul>
                                    <a href="#" class="continue regcontinue">Continue</a>
                                </div>
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

        <div id="cachebox">
            <img src="" cache="img/avatar_female.png"/>
            <img src="" cache="img/avatar_male.png"/>
            <img src="" cache="img/bkg_male.jpg"/>
            <img src="" cache="img/bkg_swoop_1.png"/>
            <img src="" cache="img/bkg_swoop_2.png"/>
            <img src="" cache="img/bkg_swoop_3.png"/>
            <img src="" cache="img/bkg_swoop_4.png"/>
            <img src="" cache="img/bkg_swoop_5.png"/>
            <img src="" cache="img/bkg_swoop_6.png"/>
            <img src="" cache="img/bodytype_male.png"/>
            <img src="" cache="img/temperature_flare.png"/>
            <img src="" cache="img/temperature_tab.png"/>
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
