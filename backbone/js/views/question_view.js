define([
  'backbone',
], function (Backbone) {

    var QuestionView = Backbone.View.extend({
        //template: _.template($('#question-template').html()),
        initialize: function(){
            //this.model.bind("change",this.render,this);
        },
        events: {
            'click .answers.singlechoice li button':'HandleAnswerClick',
            'click .answers.multichoice li button':'HandleMultiChoiceClick',
            'click .yesno button':'HandleYesNo',
            'click .back':'HandleBackClick',
        },
        HandleYesNo: function(evt){
            if($(evt.currentTarget).hasClass('yes')){
                this.$('.yesno').hide();
                this.$('.multichoice').show();
            }else{
                this.model.set('answerChoice', '');
                this.model.set('answerBit', 0);

                NextQuestion(false);
            }
        },
        HandleAnswerClick: function(evt){
            this.model.TallyMon($(evt.currentTarget).attr('answerId'));
        },
        HandleMultiChoiceClick: function(evt){
            var answerList = "";
            $.each(this.$('.multichoice input:checked'),function(idx,answer){
                if( answerList != "" ) answerList += ",";
                answerList += $(answer).val();
            });
            console.log(answerList);
            this.model.set('answerChoice', answerList);
            this.model.set('answerBit', 0);

            NextQuestion(false);
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
