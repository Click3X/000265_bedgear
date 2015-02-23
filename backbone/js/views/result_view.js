define([
  'backbone',
], function (Backbone) {

    var ResultView = Backbone.View.extend({
        template: _.template($('#result-template').html()),
        initialize: function(){
            this.model.bind("change",this.render,this);
        },
        events: {
            'submit .profile form':'HandleProfileSubmit',
        },
        HandleProfileSubmit: function(evt){
            console.log('submitting profile');
            $.post(API_PATH+'profile/', $(evt.currentTarget).serialize(),this.HandleProfileResponse(this));
            return false;
        },
        HandleProfileResponse: function(self){
            return function(){
            console.log('profile success');
            self.model.set('sessionId', 'done');
            };
        },
        render: function(){
            console.log(this.model.get('data'));
            $(this.el).html(this.template(this.model.attributes));
            $('.panel').hide();
            this.$el.show();
        },
    });

    return ResultView;
});
