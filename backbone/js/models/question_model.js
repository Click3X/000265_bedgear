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
                answerDetail:'',
            }
        },
        initialize: function(){
            //alert("Welcome to this world");
            //this.listenTo(this.model,'change', this.HandleFetch);
        },
        TallyMonTemp: function(pTemp){
            //console.log('testing',pAnswerId);
            //TEMPERATURE_HOT
            for( var idx in this.get('question').answers ){
                if( pTemp >= TEMPERATURE_HOT && this.get('question').answers[idx].answerText.toUpperCase() == "HOT" ||
                    pTemp < TEMPERATURE_HOT && this.get('question').answers[idx].answerText.toUpperCase() == "COLD"
                ){
                    this.set('answerChoice', this.get('question').answers[idx].answerId);
                    this.set('answerBit', this.get('question').answers[idx].answerBitpos);
                    this.set('answerDetail', pTemp);
                    NextQuestion(this.get('question').answers[idx].question);

                    break;
                }
            }

        },
        TallyMon: function(pAnswerId){
            //console.log('testing',pAnswerId);
            for( var idx in this.get('question').answers ){
                if( this.get('question').answers[idx].answerId == pAnswerId ){
                    this.set('answerChoice', this.get('question').answers[idx].answerId);
                    this.set('answerBit', this.get('question').answers[idx].answerBitpos);
                    this.set('answerDetail', '');
                    NextQuestion(this.get('question').answers[idx].question);

                    break;
                }
            }

        },
    });
    return QuestionModel;
});
