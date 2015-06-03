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

            this.$('div.product').empty();

            console.log("DATA",this.model.get('data')[$(evt.currentTarget).attr('pidx')].benefits);

            var benes = this.model.get('data')[$(evt.currentTarget).attr('pidx')].benefits;
            for( idx in benes ){
                this.$('div.product').append(
                    $('<div>').addClass('hotspot').append(
                        $('<span>').html(benes[idx].benefitName).hide()

                    ).append(
                        $('<a>').attr('href','#').html('&nbsp;')
                            .mouseenter(function(){
                                $(this).parent().find('span').show();
                            })
                            .mouseleave(function(){
                                $(this).parent().find('span').hide();
                            })
                    ).css('margin-top',benes[idx].benefitY+'px')
                    .css('margin-left',benes[idx].benefitX+'px'));

            }

            this.$('div.product').css('background-image',"url('img/products/"+$(evt.currentTarget).attr('pimg')+"')");
            this.$('strong.product').html($(evt.currentTarget).attr('pname'));
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
