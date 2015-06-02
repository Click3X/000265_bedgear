define([
  'backbone',
], function (Backbone) {

    var ResultView = Backbone.View.extend({
        template: _.template($('#result-template').html()),
        initialize: function(){
            this.model.bind("change",this.render,this);
        },
        events: {
            'click .products li':'HandleProductClick',
            'click .product .email':'HandleEmailClick',
            'submit .profile form':'HandleProfileSubmit',
        },
        HandleProductClick: function(evt){
            //alert(this.$('.product').css());
            this.$('.product').css('background-image',"url('img/products/"+$(evt.currentTarget).attr('pimg')+"')");
            this.$('.product strong').html($(evt.currentTarget).attr('pname'));
            this.$('.product .buy').attr('href',$(evt.currentTarget).attr('psurl'));
            this.$('.product .detail').attr('href',$(evt.currentTarget).attr('purl'));
            this.$('.products li').removeClass('selected');
            $(evt.currentTarget).addClass('selected');
        },
        HandleEmailClick: function(evt){
            this.$('.profile').toggle();
            return false;
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
            //this.$('.questiongroup').css('opacity',0);
            $('.panel').hide();
            this.$('.products li:first-child').click();
            this.$el.show();
            // this.$('.questiongroup').animate({
            //     opacity: 1,
            //     //marginLeft: 0
            // }, 500);
        },
    });

    return ResultView;
});
