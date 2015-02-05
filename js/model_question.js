var Question = Backbone.Model.extend({

  url: 'tinderbox/jsonapi/question/1',

  defaults: {
    questionText: "nothing to see here"
  },

  validate: function(attributes){
    if(attributes.questionText === undefined){
        return "Remember to set question text.";
    }
  },

  initialize: function(){
    console.log('question init.');
    this.on("invalid", function(model, error){
        console.log(error);
    });
  }
});


var Answer = Backbone.Model.extend({


  defaults: {
    answerText: "nothing to see here"
  },


});
