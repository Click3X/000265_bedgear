Question.prototype = new Panel();
Question.prototype.constructor=Question;

function Question(pId, pNumber){

    this.elem = $('#'+pId);
    this.qNum = pNumber;
    this.elem.find('.back').click(this.Back(this));
}

Question.prototype.Back = function(self){
   return function(){
     // Call global PreviousQuestion to update the history and load appropriate panel
     PreviousQuestion();
     return false;
   };
};

Question.prototype.Load = function(){

    DebugOut("Loading Question...");

    $.get(API_PATH+'question/'+this.qNum,this.HandleQuestion(this));

    //this.Show();
};

Question.prototype.HandleQuestion = function(self){
    return function(response) {
        if( response.question ){
          arrHistory.unshift(response.question);
          console.log('history', arrHistory);
          self.RenderQuestion();
        }else{
          // If no question comes back, assume we're at the end of the quiz
          self.GetResult();
        }
    };
};

Question.prototype.RenderQuestion = function(){
  this.ClearQuestionGroup();
  this.elem.find('.number').html(arrHistory[0].questionNumber);
  this.elem.find('.question').html(arrHistory[0].questionText);
  this.elem.find('.answers').append(this.BuildAnswers(this, arrHistory[0].answers));
  this.Show();
};

Question.prototype.BuildAnswers = function(self, pArrAns){
  return function(){
    var tmpList = $('<ul/>');
    $.each(pArrAns,function(idx, answer){
      var tmpItem = $('<li/>').append($('<button/>').html(answer.answerText).click(self.TallyMon(self, answer.answerId,answer.answerBitpos, answer.question)));
      tmpList.append(tmpItem);
    });

    return tmpList;
  };
};

Question.prototype.ClearQuestionGroup = function(){
  this.elem.find('.number').empty();
  this.elem.find('.question').empty().html('loading...');
  this.elem.find('.answers').empty();
};

Question.prototype.TallyMon = function(self, pId, pVal, pQues){
  return function(){
    //console.log('testing',self);
    console.log('pQues',pQues);
    console.log('pVal', pVal);

    arrHistory[0].answerChoice = pId;
    arrHistory[0].answerBit = parseInt(pVal,10);

    if( pQues ){
      // Handle a sub-question
      self.HandleQuestion(self)({'question':pQues});
    }else{
      // Ask the next question
      NextQuestion();
    }
  };
};

Question.prototype.RevealChoice = function(self){
  return function(){
  self.elem.find('.answers ul li:hidden:first').css({
      opacity: 0,
      marginLeft: 200
    }).stop().show().animate({
      opacity: 1,
      marginLeft: 0
    }, 200, self.RevealChoice(self));
  };
};

Question.prototype.Show = function(pProfileId){

  this.elem.find('.question').css('opacity',0);
  this.elem.find('.answers li').hide();
  Panel.prototype.Show.call(this);

  this.elem.find('.question').animate({
      opacity: 1
      //marginLeft: 0
    }, 500, this.RevealChoice(this)());



  return true;
};
