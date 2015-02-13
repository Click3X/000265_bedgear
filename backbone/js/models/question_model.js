define([
  'backbone',
], function (Backbone) {
    var QuestionModel = Backbone.Model.extend({
        urlRoot: API_PATH+'question',
        defaults: {
            'question':{
                questionNumber:0,
                questionText:'loading...',
                answerChoice:0,
                answerBit:0,
            }
        },
        initialize: function(){
            //alert("Welcome to this world");
            //this.listenTo(this.model,'change', this.HandleFetch);
        },
        TallyMon: function(pAnswerId){
            //console.log('testing',pAnswerId);
            for( var idx in this.get('question').answers ){
                if( this.get('question').answers[idx].answerId == pAnswerId ){
                    this.set('answerChoice', this.get('question').answers[idx].answerId);
                    this.set('answerBit', this.get('question').answers[idx].answerBitpos);

                    NextQuestion(this.get('question').answers[idx].question);

                    break;
                }
            }

        },
    });
    return QuestionModel;
});
