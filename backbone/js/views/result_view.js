define([
  'backbone',
], function (Backbone) {

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

    return ResultView;
});
