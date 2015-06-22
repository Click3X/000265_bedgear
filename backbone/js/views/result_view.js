define([
  'backbone',
], function (Backbone) {

    var ResultView = Backbone.View.extend({
        template: _.template($('#result-template').html()),
        initialize: function(){
            this.model.bind("change",this.render,this);
        },
        events: {
            'click .products .prodselection li':'HandleProductClick',
            'click .email':'HandleEmailClick',
            'submit .profile form':'HandleProfileSubmit',
            'click .back':'HandleBackClick',
            'click .startover':'HandleStartOverClick',
        },
        HandleBackClick: function(evt){
            PreviousQuestion();
        },
        HandleStartOverClick: function(evt){
            FirstQuestion();
        },
        HandleProductClick: function(evt){
            //alert(this.$('.product').css());

            this.$('div.product').empty();

            console.log("DATA",this.model.get('data')[$(evt.currentTarget).attr('pidx')].benefits);

            var benes = this.model.get('data')[$(evt.currentTarget).attr('pidx')].benefits;
            for( idx in benes ){
                this.$('div.product').append(
                    $('<div>').addClass('hotspot').append(
                        $('<a>').attr('href','#').append(
                                $('<img>').attr('src','img/hotspot.png')
                            )
                            .mouseover(function(){
                                $(this).parent().find('span').css('opacity',1);
                            })
                            .mouseout(function(){
                                $(this).parent().find('span').css('opacity',0);
                            })
                            .click(function(){
                                $(this).parent().parent().find('span').css('opacity',0);
                                $(this).parent().find('span').css('opacity',1);
                            })
                    ).append(
                        $('<span>').html(benes[idx].benefitName).css('opacity',0)

                    ).css('margin-top',benes[idx].benefitY+'px')
                    .css('margin-left',benes[idx].benefitX+'px'));

            }

            this.$('div.product').css('background-image',"url('img/products/"+$(evt.currentTarget).attr('pimg')+"')");
            this.$('strong.product').html($(evt.currentTarget).attr('pname'));
            this.$('span#heroname').html($(evt.currentTarget).attr('pname'));
            this.$('.controlgroup .buy').attr('href',$(evt.currentTarget).attr('psurl'));
            this.$('.hero .detail').attr('href',$(evt.currentTarget).attr('purl'));
            this.$('.products .prodselection li').removeClass('selected');
            this.$('.products .dumbell li').removeClass('selected');
            this.$('.products .dumbell li[pidx="'+$(evt.currentTarget).attr('pidx')+'"]').addClass('selected');
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
