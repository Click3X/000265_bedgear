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
            this.$el.show();
        },
    });

    return IntroView;
});
