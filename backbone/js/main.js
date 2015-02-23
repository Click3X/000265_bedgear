'use strict';

var router,pushstate=false,mobile=false,retina=false,mp4=false,ipad=false,iphone=false,ie=false,ie8=false,android=false,firstpage = true;

var LAST_QUESTION_NUMBER = 7;
var TEMPERATURE_HOT = 60;
var API_PATH = "../tinderbox/jsonapi/";

var arrHistory = Array();
var arrQuestions = Array();
var currentQues = 0;
var result_model,result_view,view_question,NextQuestion,PreviousQuestion;


require.config({
    baseUrl: base_url,
    paths: {
        jquery:         'js/vendor/jquery.min',
        jquery_ui:      'js/vendor/jquery-ui.min',
        backbone:       'js/vendor/backbone.min',
        underscore:     'js/vendor/underscore.min',
        question_model: 'js/models/question_model',
        result_model:   'js/models/result_model',
        question_view:  'js/views/question_view',
        result_view:    'js/views/result_view',
    }
});

require([
    'jquery',
    'underscore',
    'backbone',
    'question_model',
    'result_model',
    'question_view',
    'result_view',
    'jquery_ui',
], function( $, _, Backbone, QuestionModel, ResultModel, QuestionView, ResultView ) {

    $(document).ready(function(){
        /*----- user agent ------*/
        var uagent = navigator.userAgent.toLowerCase(),body = document.body,
        mobile_search = [ "iphone","ipod","series60","symbian","android","windows ce","windows7phone","w7p","blackberry","palm" ];

        /*--------mobile---------*/
        for(var i in mobile_search){
            if( uagent.search( mobile_search[i] ) > -1 ){
                mobile = true; break;
            }
        }

        /*--------retina---------*/
        retina = mobile && window.devicePixelRatio > 1;

        /*--------pushstate---------*/
        pushstate = !!(window.history && window.history.pushState);

        /*--------mp4---------*/
        mp4 = ( Modernizr.video && document.createElement('video').canPlayType('video/mp4; codecs=avc1.42E01E,mp4a.40.2') );

        /*--------ie,ie8---------*/
        if( uagent.search( "msie" ) > -1 ) ie = true;
        ie8 = $("body").hasClass("ie8");

        /*--------ipad,iphone---------*/
        if( uagent.search( "ipad" ) > -1 ) ipad = true;
        if( uagent.search( "iphone" ) > -1 ) iphone = true;
        if( uagent.search( "android" ) > -1 ) android = true;

        /*-------- set body tags ---------*/
        if(mobile) body.className += " mobile";
        if(pushstate) body.className += " pushstate";
        if(retina) body.className += " retina";
        if(mp4) body.className += " mp4";
        if(ipad) body.className += " ipad";
        if(iphone) body.className += " iphone";
        if(android) body.className += " android";
        if(ie) body.className += " ie";
        if(debug) body.className += " debug";

        /*----- init router ------*/
        //router = new Router();


        // Pop the current question off the history stack and load the last question from memory
        PreviousQuestion = function(){
            console.log('ck1',arrHistory.length, arrHistory);
            // Remove the current question from the history
            arrHistory.shift();
            console.log('ck2',arrHistory.length, arrHistory);
            // Adjust the question pointer to the current history item
            currentQues=parseInt(arrHistory[0].get('question').questionNumber,10);
            // Render instead of load since we're working off an existing history
            view_question.AddModel(arrHistory[0]);
            view_question.render();
        };

        // Increment the question array pointer and load the appropriate panel
        NextQuestion = function(pSub){
            console.log('pSub', pSub);
            if( currentQues >= LAST_QUESTION_NUMBER ){
                // If the quesiton pointer is at the end of the question array
                //panel['result'].Load();
                console.log("Loading Result...");
                var tally = {
                    bitTotal:0,
                    arrAnswers:[],
                };
                for( var idx in arrHistory ){
                    tally.bitTotal += parseInt(arrHistory[idx].get('answerBit'),10);
                    tally.arrAnswers.push(arrHistory[idx].get('answerChoice'));
                    console.log('tally',tally);
                }
                result_model.set('id', tally.bitTotal);
                result_model.set('bitTotal', tally.bitTotal);
                result_model.set('arrAnswers', tally.arrAnswers);
                $.post(API_PATH+'survey/',{'answerId':tally.arrAnswers.join()},function(){console.log('survey data sent');});
                result_model.fetch();
            }else{
                // Load up the latest question
                if(pSub){
                    arrHistory.unshift(new QuestionModel({'question':pSub}));
                }else{
                    currentQues++;
                    arrHistory.unshift(new QuestionModel({id:currentQues}));
                }

                view_question.AddModel(arrHistory[0]);
                view_question.AskQuestion();
            }
        };

        result_model = new ResultModel();
        result_view = new ResultView({el: $('#result'), model:result_model});
        view_question = new QuestionView({ el: $("#question") });

        NextQuestion();
    });
});
