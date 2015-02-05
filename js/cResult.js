function Result(){

    this.panel = new Panel('resultgroup');
    this.bitTotal = 0;
    this.arrAnswers = Array();
}

Result.prototype.Load = function(){

    DebugOut("Loading Result...");

    for( var idx in arrHistory){
      this.bitTotal += arrHistory[idx].answerBit;
      this.arrAnswers.push(arrHistory[idx].answerChoice);
    }
    console.log('tally',this.arrAnswers,this.bitTotal);
    $.get(API_PATH+'result/'+this.bitTotal,this.HandleResult(this));
};

Result.prototype.HandleResult = function(self){
    return function(response) {
      console.log(response);
      $.each(response.data,function(idx, product){
        $('#resultgroup .products').append($('<li/>').append(product.productName));
      });
      $('#resultgroup').show();
        self.Show();
    };
};

Result.prototype.RenderResult = function(){
  this.ClearResultGroup();
  this.panel.elem.find('.number').html(arrHistory[0].ResultNumber);
  this.panel.elem.find('.Result').html(arrHistory[0].ResultText);
  this.panel.elem.find('.answers').append(this.BuildAnswers(this, arrHistory[0].answers));
  $('#Resultgroup').show();
};

Result.prototype.BuildAnswers = function(self, pArrAns){
  return function(){
    var tmpList = $('<ul/>');
    $.each(pArrAns,function(idx, answer){
      var tmpItem = $('<li/>').append($('<button/>').html(answer.answerText).click(self.TallyMon(self, answer.answerId,answer.answerBitpos, answer.Result)));
      tmpList.append(tmpItem);
    });

    return tmpList;
  };
};

Result.prototype.ClearResultGroup = function(){
  this.panel.elem.find('.number').empty();
  this.panel.elem.find('.Result').empty().html('loading...');
  this.panel.elem.find('.answers').empty();
};

Result.prototype.TallyMon = function(self, pId, pVal, pQues){
  return function(){
    //console.log('testing',self);
    console.log('pQues',pQues);
    console.log('pVal', pVal);

    arrHistory[0].answerChoice = pId;
    arrHistory[0].answerBit = parseInt(pVal,10)

    if( pQues ){
      // Handle a sub-Result
      self.HandleResult(self)({'Result':pQues});
    }else{
      // Ask the next Result
      NextResult();
    }
  };
};

Result.prototype.Show = function(){


  this.panel.Show();
    return true;
};
