<?php
    $social = array();
    $social['title'] = "Bedgear Product Selector";
    $social['description'] = "InsertDescriptionHere";
    $social['image'] = "";
    $social['link'] = "";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		<title><?php echo $social['title']?></title>
		<meta name="description" content="<?php echo $social['description']?>">
		<meta name="author" content="Matthew Wilber">
		<meta property="og:title" content="<?php echo $social['title']?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $social['link']?>" />
		<meta property="og:image" content="<?php echo $social['image']?>" />
		<meta property="og:site_name" content="<?php echo $social['title']?>" />
		<meta property="fb:admins" content="631337813" />
		<meta property="og:description" content="<?php echo $social['description']?>" />
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
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
        <link rel="stylesheet" href="css/mobile.css">

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
                    <div id="canvas"></div>
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
                            <div class="questiongroup">
                                <h1 class="fadeout">Discover the ultimate<br/>performance pillow<span>Determine the right pillow for you</span>
                                    <a href="#" class="start button--ujarak">Start</a>
                                </h1>

                                <div class="answers singlechoice avatargroup windowzoom">
                                    <div class="zoomer male">
                                        <a href="#" onclick="return false;" class="avatar gender male" style="background-image:url('img/rotation_male_10fps.png')">
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="zoomer female">
                                        <a href="#" onclick="return false;" class="avatar gender female" style="background-image:url('img/rotation_female_10fps.png')">
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                                <!--<a href="#" class="animate">Animate</a>-->
                            </div>
                        </script>
                    </div>
                    <div id="question" class="panel"></div>
                        <script type="text/template" id="question1-template">
                            <div id="frame6" class="swoop fadeout" src=""></div>
                            <div id="frame5" class="swoop fadeout" src=""></div>
                            <div id="frame4" class="swoop fadeout" src=""></div>
                            <div id="frame3" class="swoop fadeout" src=""></div>
                            <div id="frame2" class="swoop fadeout" src=""></div>
                            <div id="frame1" class="swoop fadeout" src=""></div>

                            <div class="questiongroup">
                                <p class="number"><%= questionNumber %></p>
                                <h1 class="fadeout"><%= questionText %></h1>
                                <div class="answers singlechoice avatargroup windowzoom">
                                    <div class="zoomer male">
                                        <a href="#" onclick="return false;" class="avatar gender male" style="background-image:url('img/rotation_male_10fps.png')" answerSelected="false" answerId="<%=answers[0].answerId%>" answerBitpos="<%=answers[0].answerBitpos%>">
                                            <span><%=answers[0].answerText%></span>
                                        </a>
                                    </div>
                                    <div class="zoomer female">
                                        <a href="#" onclick="return false;" class="avatar gender female" style="background-image:url('img/rotation_female_10fps.png')" answerSelected="false" answerId="<%=answers[1].answerId%>" answerBitpos="<%=answers[1].answerBitpos%>">
                                            <span><%=answers[1].answerText%></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </script>
                        <script type="text/template" id="question2-template">
                            <a href="#" class="back button--ujarak"><i class="fa fa-angle-left"></i></a><a href="#" class="help">?</a>
                            <div class="avatargroup windowzoom">
                                <div class="zoomer male">
                                    <a href="#" onclick="return false;" class="avatar gender male" style="background-image:url('img/zoom_male_static.png')">
                                        <span></span>
                                    </a>
                                </div>
                                <div class="zoomer female">
                                    <a href="#" onclick="return false;" class="avatar gender female" style="background-image:url('img/zoom_female_static.png')">
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="questiongroup">
                                <div class="background fadeout"></div>
                                <p class="number"><%= questionNumber %></p>
                                <h1 class="fadeout"><%= questionText %></h1>
                                <ul class="multichoice" style="display:none;">
                                    <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><input type="radio" name="sleeppos" answerText='<%=answers[answer].answerText%>' answerId="<%=answers[answer].answerId%>" value="<%=answers[answer].answerBitpos%>"><label><%=answers[answer].answerText%></label></li>
                                    <% } %>
                                </ul>
                                <div class="answers sleeppos fadeout">
                                <ul class="">
                                <% for( answer in answers ){ %>
                                    <li style="display: list-item; margin-left: 0px;"><a href="#" class="spsub" answerSelected="false" answerId="<%=answers[answer].answerId%>" answerBitpos="<%=answers[answer].answerBitpos%>"><%=answers[answer].answerText%></a></li>
                                <% } %>
                                </ul>
                            </div>
                                <a href="#" class="continue spcontinue button--ujarak">Continue</a>
                            </div>
                        </script>
                        <script type="text/template" id="question3-template">
                            <a href="#" class="back button--ujarak"><i class="fa fa-angle-left"></i></a><a href="#" class="help">?</a>
                            <div class="questiongroup fadeout">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>
                                <h2 class="beta">In which position do you fall asleep?</h2>
                                <h2 class="gamma">In which position do you wake up?</h2>
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
                                <ul class="answers sleeppos windowzoom beta">
                                    <li><a id="" href="#" class="" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_stomach_<%=glgender%>.png');"></a></li>
                                    <li><a id="" href="#" class="" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_back_<%=glgender%>.png');"></a></li>
                                    <li><a id="" href="#" class="" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_side_<%=glgender%>.png');"></a></li>
                                    <li class="dkcontinue"><a href="#" class="continue dkcontinue">Don't Know</a></li>
                                </ul>
                                <ul class="answers sleeppos windowzoom gamma">
                                    <li><a id="" href="#" class="spadvance" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_stomach_<%=glgender%>.png');"></a></li>
                                    <li><a id="" href="#" class="spadvance" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_back_<%=glgender%>.png');"></a></li>
                                    <li><a id="" href="#" class="spadvance" answerselected="false" answerid="6" answerbitpos="32" style="background-image:url('img/sleeppos_multiple_side_<%=glgender%>.png');"></a></li>
                                    <li class="dkcontinue"><a href="#" class="continue dkcontinue">Don't Know</a></li>
                                </ul>
                                <a href="#" class="continue spcontinue button--ujarak">Continue</a>
                            </div>
                        </script>
                        <script type="text/template" id="question4-template">
                            <a href="#" class="back button--ujarak"><i class="fa fa-angle-left"></i></a><a href="#" class="help">?</a>
                            <div class="questiongroup fadeout">
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
                            <a href="#" class="back button--ujarak"><i class="fa fa-angle-left"></i></a><a href="#" class="help">?</a>
                            <div class="questiongroup fadeout">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>
                                <div class="answers temperature">
                                    <div id="tempscale">
                                        <table id="temptable" border="1">
                                            <tr>
                                                <td colspan="1" width="10%" class="cold" style="text-align:center;">Cold</td>
                                                <td colspan="1" width="40%">&nbsp;</td>
                                                <td colspan="1" width="40%">&nbsp;</td>
                                                <td colspan="1" width="10%" class="hot" style="text-align:center;">Hot</td>
                                            </tr>
                                            <tr>
                                                <td width="10%" style="border-left:solid 1px #fff;">&nbsp;</td>
                                                <td width="40%">&nbsp;</td>
                                                <td width="40%" style="border-left:solid 1px #fff;">&nbsp;</td>
                                                <td width="10%" style="border-right:solid 1px #fff;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6">
                                                    <div id="temperature" class="slider"></div>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                    <a href="#" class="continue tempcontinue button--ujarak">Continue</a>
                                </div>
                            </div>
                        </script>
                        <script type="text/template" id="question6-template">
                            <a href="#" class="back button--ujarak"><i class="fa fa-angle-left"></i></a><a href="#" class="help">?</a>
                            <div class="questiongroup fadeout">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>

                                <div class="answers">
                                    <ul class="yesno">
                                        <li><a href="#" class="yes">Yes</a></li>
                                        <li><a href="#" class="no">No</a></li>
                                    </ul>
                                    <ul class="multichoice" style="">
                                        <% for( answer in answers ){ %>
                                        <li style="display: list-item; margin-left: 0px;"><div class="customcheck button--ujarak" onclick="$(this).parent().find('input[type=checkbox]').prop('checked', !$(this).parent().find('input[type=checkbox]').prop('checked')); if($(this).parent().find('input[type=checkbox]').prop('checked')) $(this).addClass('selected'); else $(this).removeClass('selected');"></div><input type="checkbox" value="<%=answers[answer].answerId%>"><label><%=answers[answer].answerText%></label></li>
                                        <% } %>
                                    </ul>
                                    <a href="#" class="continue regcontinue button--ujarak">Continue</a>
                                </div>
                            </div>
                        </script>
                        <script type="text/template" id="question7-template">
                            <a href="#" class="back button--ujarak"><i class="fa fa-angle-left"></i></a><a href="#" class="help">?</a>
                            <div class="questiongroup fadeout">
                                <p class="number"><%= questionNumber %></p>
                                <h1><%= questionText %></h1>

                                <div class="answers">
                                    <ul class="yesno">
                                        <li><a href="#" class="yes">Yes</a></li>
                                        <li><a href="#" class="no">No</a></li>
                                    </ul>
                                    <ul class="multichoice" style="">
                                        <% for( answer in answers ){ %>
                                        <li style="display: list-item; margin-left: 0px;"><div class="customcheck button--ujarak" onclick="$(this).parent().find('input[type=checkbox]').prop('checked', !$(this).parent().find('input[type=checkbox]').prop('checked')); if($(this).parent().find('input[type=checkbox]').prop('checked')) $(this).addClass('selected'); else $(this).removeClass('selected');"></div><input type="checkbox" value="<%=answers[answer].answerId%>"><label><%=answers[answer].answerText%></label></li>
                                        <% } %>
                                    </ul>
                                    <a href="#" class="continue regcontinue button--ujarak">Continue</a>
                                </div>
                            </div>
                        </script>

                    <div id="result" class="panel">
                        <script type="text/template" id="result-template">
                            <a href="#" class="back button--ujarak"><i class="fa fa-angle-left"></i></a>
                            <div class="questiongroup">
                                <h1><span id="herohead">YOUR BEDGEAR</span> <span id="heroname"></span>PILLOW ID&reg;</h1>
                                <div class="hero windowzoom">
                                    <a href="" class="detail" target="_blank" onclick="ga('send', 'event', 'productselector', 'detail', 'click', 0);">More Details <i class="fa fa-caret-right"></i></a>
                                    <div class="price"></div>
                                    <div class="product"></div>
                                    <a href="" class="startover"><i class="fa fa-caret-left"></i> Start Over</a>

                                </div>
                                <div class="products">
                                    <ul class="dumbell">
                                        <% for( product in data ){ %>
                                            <li pidx="<%=product%>">
                                                <div></div>
                                            </li>
                                        <% } %>
                                    </ul>
                                    <ol class="prodselection">
                                        <% for( product in data ){ %>
                                            <li style="display: list-item; background-image:url('img/products/<%=data[product].productImage%>');" pidx="<%=product%>" pname="<%=data[product].productName%>" pprice="<%=data[product].productPrice%>" pimg="<%=data[product].productImage%>" purl="<%=data[product].productUrl%>"  psurl="<%=data[product].productStoreUrl%>">
                                                <span><%=data[product].productName%></span>
                                            </li>
                                        <% } %>
                                    </ol>
                                </div>
                                <div class="controlgroup">
                                    <strong class="product">&nbsp;</strong>
                                    <a href="#" class="email button--ujarak" target="_blank">Email Me Results</a>
                                    <a href="" class="buy button--ujarak" target="_blank" onclick="ga('send', 'event', 'productselector', 'buy_now', 'click', 0);">Buy Now</a>

                                </div>
                                <div class="profile">
                                <% if( sessionId == "" ){ %>
                                    <h2>Loading...</h2>
                                <% }else if( sessionId == "done" ){ %>
                                    <h2>Thank You!</h2>
                                <% } else { %>
                                    <h2>Enter your email address:</h2>
                                    <form>
                                        <input type="hidden" name="sleeppos"/>
                                        <input type="hidden" name="bodytype"/>
                                        <input type="hidden" name="result1"/>
                                        <input type="hidden" name="result2"/>
                                        <input type="hidden" name="result3"/>
                                        <input type="hidden" name="surveyUUID" value="<%= sessionId %>"/>
                                        <input type="text" name="profileEmail"/>
                                        <input type="submit"/>
                                    </form>
                                <% } %>
                                </div>
                            </div>
                        </script>
                    </div>
                </div>
            </div>

            <div id="footer-container">

            </div>
        </div>

        <div id="cachebox">

            <img src="" cache="img/bkg_male.jpg"/>
            <img src="" cache="img/bkg_female.jpg"/>
            <img src="" cache="img/bkg_swoop_1.png"/>
            <img src="" cache="img/bkg_swoop_2.png"/>
            <img src="" cache="img/bkg_swoop_3.png"/>
            <img src="" cache="img/bkg_swoop_4.png"/>
            <img src="" cache="img/bkg_swoop_5.png"/>
            <img src="" cache="img/bkg_swoop_6.png"/>
            <img src="" cache="img/bodytype_broad_female.png"/>
            <img src="" cache="img/bodytype_broad_male.png"/>
            <img src="" cache="img/bodytype_flare.png"/>
            <img src="" cache="img/bodytype_medium_female.png"/>
            <img src="" cache="img/bodytype_medium_male.png"/>
            <img src="" cache="img/bodytype_narrow_female.png"/>
            <img src="" cache="img/bodytype_narrow_male.png"/>
            <img src="" cache="img/bodytype_petite_female.png"/>
            <img src="" cache="img/bodytype_petite_male.png"/>
            <img src="" cache="img/rotation_female_10fps.png"/>
            <img src="" cache="img/rotation_male_10fps.png"/>
            <!--<img src="" cache="img/sleeppos_multiple_back_female.png"/>
            <img src="" cache="img/sleeppos_multiple_back_male.png"/>
            <img src="" cache="img/sleeppos_multiple_side_female.png"/>
            <img src="" cache="img/sleeppos_multiple_side_male.png"/>
            <img src="" cache="img/sleeppos_multiple_stomach_female.png"/>
            <img src="" cache="img/sleeppos_multiple_stomach_male.png"/>-->
            <img src="" cache="img/sleepposition_back_female.png"/>
            <img src="" cache="img/sleepposition_back_male.png"/>
            <img src="" cache="img/sleepposition_multiple_female.png"/>
            <img src="" cache="img/sleepposition_multiple_male.png"/>
            <img src="" cache="img/sleepposition_side_female.png"/>
            <img src="" cache="img/sleepposition_side_male.png"/>
            <img src="" cache="img/sleepposition_stomach_female.png"/>
            <img src="" cache="img/sleepposition_stomach_male.png"/>
            <img src="" cache="img/temperature_flare.png"/>
            <img src="" cache="img/temperature_tab.png"/>
            <img src="" cache="img/zoom_female_static.png"/>
            <img src="" cache="img/zoom_male_static.png"/>
        </div>
        <script type="text/javascript">

            var paper, circs, i, nowX, nowY, timer, props = {}, toggler = 0, elie, dx, dy, rad, cur, opa;
            // Returns a random integer between min and max
            // Using Math.round() will give you a non-uniform distribution!
            function ran(min, max)
            {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            function moveIt()
            {
                for(i = 0; i < circs.length; ++i)
                {
                      // Reset when time is at zero
                    if (! circs[i].time)
                    {
                        circs[i].time  = 10000;
                        circs[i].deg   = ran(-179, 180);
                        circs[i].vel   = ran(1, 2);
                        circs[i].curve = ran(0, 1);
                        circs[i].fade  = ran(0, 0.5);
                        circs[i].grow  = ran(-20, 20);
                    }
                        // Get position
                    nowX = circs[i].attr("cx");
                    nowY = circs[i].attr("cy");
                       // Calc movement
                    dx = circs[i].vel * Math.cos(circs[i].deg * Math.PI/180);
                    dy = circs[i].vel * Math.sin(circs[i].deg * Math.PI/180);
                        // Calc new position
                    nowX += dx;
                    nowY += dy;
                        // Calc wrap around
                    //if (nowX < 0) nowX = ((window.innerWidth*.75)-20) + nowX;
                    //else          nowX = nowX % ((window.innerWidth*.25)-20);
                    //if (nowY < 0) nowY = ((window.innerHeight*.75)-20) + nowY;
                    //else          nowY = nowY % ((window.innerHeight*.25)-20);

                        // Render moved particle
                    circs[i].attr({cx: nowX, cy: nowY});

                        // Calc growth
                    rad = circs[i].attr("r");
                    if (circs[i].grow > 0) circs[i].attr("r", Math.min(10, rad +  .1));
                    else                   circs[i].attr("r", Math.max(1,  rad -  .1));

                        // Calc curve
                    if (circs[i].curve > 0) circs[i].deg = circs[i].deg + ran(0, 2);
                    else                    circs[i].deg = circs[i].deg - ran(0, 2);

                        // Calc opacity
                    opa = circs[i].attr("fill-opacity");
                    if (circs[i].fade > 0) {
                        circs[i].attr("fill-opacity", Math.max(.1, opa -  .05));
                        circs[i].attr("stroke-opacity", Math.max(.05, opa -  .01)); }
                    else {
                        circs[i].attr("fill-opacity", Math.min(.1, opa +  .05));
                        circs[i].attr("stroke-opacity", Math.min(.05, opa +  .01)); }

                    // Progress timer for particle
                    circs[i].time = circs[i].time - 1;

                        // Calc damping
                    //if (circs[i].vel < 1) circs[i].time = 0;
                    //else circs[i].vel = circs[i].vel - .05;

                }
                timer = setTimeout(moveIt, 60);
            }

        </script>
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/jquery.ui.touch-punch.min.js"></script>
        <script data-main="js/main" src="js/vendor/require.min.js"></script>

        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-42081821-1', 'auto');
          ga('send', 'pageview');
        </script>

    </body>
</html>
