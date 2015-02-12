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

        var arrHistory = Array();


        // Lots of experimentation here
        var Question = Backbone.Model.extend({
            urlRoot: '../tinderbox/jsonapi/question',
            initialize: function(){
                //alert("Welcome to this world");
                //this.listenTo(this.model,'change', this.HandleFetch);
            },
            HandleFetch: function(){
                //this.set('displaydata') = this.get('question');
                //this.question.answerHTML = "nothing to see here";
            }
        });

        var QuestionView = Backbone.View.extend({
            template: _.template($('#question-template').html()),
            initialize: function(){
                this.model.bind("change",this.render,this);
            },
            events: {
                'click .answers li button':'TallyMon'
            },
            NextQuestion: function(){
                this.model.fetch();
            },
            TallyMon: function(evt){
                console.log('testing',this, evt);
            },
            render: function(){

                console.log(this.model.attributes);
                $(this.el).html(this.template(this.model.attributes.question));

                this.$el.show();

                this.$('.question').css('opacity',0);
                this.$('.answers li').show();

                this.$('.question').animate({
                    opacity: 1
                    //marginLeft: 0
                }, 500, function(){});

                // this.$('.number').html(this.model.get('question').questionNumber);
                // this.$('.question').html(this.model.get('question').questionText);
                //
                // for(var idx in this.model.get('question').answers){
                //    var tmpItem = $('<li/>').append($('<button/>').html(this.model.get('question').answers[idx].answerText));
                //    this.$('.answers').append(tmpItem);
                // }


            }
        });

        arrHistory.unshift(new Question({id:4}));
        console.log(arrHistory[0]);

        var view_question = new QuestionView({ el: $("#question1"), model:arrHistory[0] });

        view_question.NextQuestion();

    });
});
