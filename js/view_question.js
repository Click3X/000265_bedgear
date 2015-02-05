var QuestionView = Backbone.View.extend({

  el: $('#questiongroup'),
  template: _.template($('#question-template').html()),

  initialize: function(){
    this.model.bind("change",this.render,this);
    this.model.fetch();
     //this.render();
  },
  render: function() {
    console.log(this.model.attributes);
    $(this.el).html(this.template(this.model.attributes.question));
    console.log(this.model.get('question').answers);
    _.each(this.model.get('question').answers, function(answer){
      console.log('answerring', answer);
      var answerModel = new Answer(answer);
      var answerView = new AnswerView({ model: answerModel });
      this.$el.append( answerView.render().el );
    }, this);
    //$(this.el).html(this.template(this.model.attributes.question));
    return this;
  }
});

var AnswerView = Backbone.View.extend({

  tagName: 'li',
  template: _.template($('#answer-template').html()),

  initialize: function(){
    this.model.bind("change",this.render,this);
    //console.log('in da model',this.model.attributes);
  },

  render:function(){
    console.log(this.model.attributes);
    $(this.el).html(this.template(this.model.attributes));
    console.log(this.el);
    return this;
  }

});


var question = new Question();
//question.set('questionText', 'Question 1?', {validate: true}); // logs: Remember to set a title for your todo.
//console.log('question: ' + question.get('questionText')); // completed: false
var questionView = new QuestionView({model:question});

// log reference to a DOM element that corresponds to the view instance
console.log(questionView.el); // logs <li></li>
