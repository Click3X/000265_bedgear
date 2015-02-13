define([
  'backbone',
], function (Backbone) {

    var QuestionView = Backbone.View.extend({
        //template: _.template($('#question-template').html()),
        initialize: function(){
            //this.model.bind("change",this.render,this);
        },
        events: {
            'click .answers li button':'HandleAnswerClick',
            'click .back':'HandleBackClick',
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
            console.log('getting template', '#question'+this.model.get('question').questionNumber+'-template');
            //if( typeof(this.template)=='undefined'){
                var templateid = '#question'+this.model.get('question').questionNumber+'-template';
                var template = _.template( $(templateid).html(), {} );
            //}
            $(this.el).html(template(this.model.attributes.question));

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

    return QuestionView;
});
