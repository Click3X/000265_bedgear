'use strict';

var router,pushstate=false,mobile=false,retina=false,mp4=false,ipad=false,iphone=false,ie=false,ie8=false,android=false,firstpage = true;

require.config({
    baseUrl: base_url,
    paths: {
        jquery:         'js/vendor/jquery.min',
        backbone:       'js/vendor/backbone.min',
        underscore:     'js/vendor/underscore.min',
        text:           'js/vendor/text.min',
        router:         'js/router',
        collections:    'js/collections',
        pages:          'js/views/pages',
        modules:        'js/modules',
        models:         'js/models'
    }
});

require([
    'jquery',
    'underscore',
    'backbone'
], function( $, _, Backbone ) {

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


        // Lots of experimentation here
        var Question = Backbone.Model.extend({
            urlRoot: '../tinderbox/jsonapi/question',
            defaults: {
                'question':{
                    questionNumber:0,
                    questionText:'loading...',
                    answerChoice:0,
                    answerBit:0,
                }
            },
            initialize: function(){
                //alert("Welcome to this world");
                //this.listenTo(this.model,'change', this.HandleFetch);
            },
            TallyMon: function(pAnswerId){
                //console.log('testing',pAnswerId);
                for( var idx in this.get('question').answers ){
                    if( this.get('question').answers[idx].answerId == pAnswerId ){
                        this.set('answerChoice', this.get('question').answers[idx].answerId);
                        this.set('answerBit', this.get('question').answers[idx].answerBitpos);

                        NextQuestion(this.get('question').answers[idx].question);

                        break;
                    }
                }

            },
        });

        var QuestionView = Backbone.View.extend({
            template: _.template($('#question-template').html()),
            initialize: function(){
                //this.model.bind("change",this.render,this);
            },
            events: {
                'click .answers li button':'HandleAnswerClick',
                'click .answers li button.back':'HandleBackClick',
            },
            HandleAnswerClick: function(evt){
                this.model.TallyMon($(evt.currentTarget).attr('answerId'));
            },
            HandleBackClick: function(evt){
                PreviousQuestion();
            },
            AddModel: function(pModel){
                this.model = pModel;
                this.model.bind("change",this.render,this);
            },
            AskQuestion: function(){
                if( typeof( this.model.get('id') ) != "undefined" ){
                    this.model.fetch();
                }else{
                    this.render();
                }
            },
            render: function(){

                console.log(this.model.attributes);
                $(this.el).html(this.template(this.model.attributes.question));

                $('.panel').hide();
                this.$el.show();

                this.$('.question').css('opacity',0);
                this.$('.answers li').show();

                this.$('.question').animate({
                    opacity: 1
                    //marginLeft: 0
                }, 500, function(){});

            }
        });

        var Result = Backbone.Model.extend({
            urlRoot: '../tinderbox/jsonapi/result',
            defaults: {
                bitTotal:0,
                arrAnswers:[],
                data:[],
            },
            initialize: function(){
                //this.set('id',this.get('bitTotal'));
            },

        });

        var ResultView = Backbone.View.extend({
            template: _.template($('#result-template').html()),
            initialize: function(){
                this.model.bind("change",this.render,this);
            },
            render: function(){
                console.log(this.model.get('data'));
                $(this.el).html(this.template(this.model.attributes));
                $('.panel').hide();
                this.$el.show();
            },
        });

        var arrHistory = Array();
        var arrQuestions = Array();
        var currentQues = 0;

        // Pop the current question off the history stack and load the last question from memory
        function PreviousQuestion(){
          // Remove the current question from the history
          arrHistory.shift();
          // Adjust the question pointer to the current history item
          currentQues=parseInt(arrHistory[0].get('question').questionNumber,10)-1;
          // Render instead of load since we're working off an existing history
          view_question.AddModel(arrHistory[0]);
          view_question.AskQuestion();
        }

        // Increment the question array pointer and load the appropriate panel
        function NextQuestion(pSub){
            console.log('pSub', pSub);
            if( currentQues >= 5 ){
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
                result_model.fetch();
            }else{
                // Load up the latest question
                if(pSub){
                    arrHistory.unshift(new Question({'question':pSub}));
                }else{
                    currentQues++;
                    arrHistory.unshift(new Question({id:currentQues}));
                }

                view_question.AddModel(arrHistory[0]);
                view_question.AskQuestion();
            }
        }

        var result_model = new Result();
        var result_view = new ResultView({el: $('#result'), model:result_model});
        var view_question = new QuestionView({ el: $("#question") });

        NextQuestion();


        //this.model.fetch({success:function(){console.log(this.model.attributes);}});

    });
});
