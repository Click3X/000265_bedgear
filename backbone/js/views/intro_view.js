define([
  'backbone',
], function (Backbone) {

    var IntroView = Backbone.View.extend({
        template: _.template($('#intro-template').html()),
        initialize: function(){
            //this.model.bind("change",this.render,this);
        },
        events: {
            'click a.start':'HandleStart',
            'click a.animate':'HandleAnimate',
        },
        HandleStart: function(evt){
            console.log('starting quiz');
            this.$('.fadeout').fadeOut(function(self){
                return function(){
                    NextQuestion();
                };
            }(this));

            return false;
        },
        HandleAnimate: function(evt){
            console.log('starting quiz');
            $(this.el).addClass('introanim')
            return false;
        },
        HandleProfileResponse: function(self){
            return function(){
            console.log('profile success');
            self.model.set('sessionId', 'done');
            };
        },
        render: function(){
            $(this.el).html(this.template());
            $('.panel').hide();
            this.$('a.start').hide();
            this.$el.show();

            $.get(API_PATH+'allquestions/',function(response){
                //console.log('all questions', response);
                arrQCache = response.question;
                self.$('a.start').show();
            }(this));

            paper = Raphael("canvas", window.innerWidth, window.innerHeight);
            circs = paper.set();
            for (i = 0; i < 15; ++i)
            {
                //opa = ran(1,3)/10;
                opa = 1;
                circs.push(paper.circle(ran(0,window.innerWidth*.25), ran((window.innerHeight-(window.innerHeight*.25)), window.innerHeight), ran(1,30)).attr({"fill-opacity": opa,
                                                                               "stroke-opacity": opa}));
            }

            for (i = 0; i < 15; ++i)
            {
                //opa = ran(1,3)/10;
                opa = 1;
                circs.push(paper.circle(ran((window.innerWidth-(window.innerWidth*.25)), window.innerWidth), ran(0,window.innerHeight*.25), ran(1,30)).attr({"fill-opacity": opa,
                                                                               "stroke-opacity": opa}));
            }
            circs.attr({fill: "#ffffff", stroke: "#ffffff"});
            moveIt();
        },
    });

    return IntroView;
});
