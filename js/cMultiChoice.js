MultiChoice.prototype = new Question();
MultiChoice.prototype.constructor=MultiChoice;

function MultiChoice(pId, pNumber){

    this.elem = $('#'+pId);
    this.qNum = pNumber;
    this.elem.find('.back').click(this.Back(this));
}

MultiChoice.prototype.BuildAnswers = function(self, pArrAns){
  return function(){
    var tmpList = $('<ul/>');
    $.each(pArrAns,function(idx, answer){
      var tmpItem = $('<li/>').addClass('multichoice').append($('<input/>').attr('type','checkbox').attr('value',answer.answerId)).append($('<label/>').html(answer.answerText));
      tmpList.append(tmpItem);
    });

    tmpList.append($('<li/>').append($('<button/>').html('Next').click(self.CatAnswers(self))));

    return tmpList;
  };
};

MultiChoice.prototype.CatAnswers = function(self){
  return function(){
    var answerList = "";
    $.each(self.elem.find('.multichoice:checked'),function(idx,answer){
      if( answerList == "" )
        answerList += $(answer).val();
      else
      answerList += ","+$(answer).val();
    });
    console.log(answerList);
    self.TallyMon(self, answerList, 0, false)();

    return false;
  };
};
