Result.prototype = new Panel();
Result.prototype.constructor=Result;

function Result(){

    this.elem = $('#resultgroup');
    this.bitTotal = 0;
    this.arrAnswers = Array();
}

Result.prototype.Load = function(){

    DebugOut("Loading Result...");

    for( var idx in arrHistory){
      this.bitTotal += arrHistory[idx].answerBit;
      this.arrAnswers.push(arrHistory[idx].answerChoice);
    }
    console.log('tally',this.arrAnswers.join(),this.bitTotal);
    $.post(API_PATH+'survey/',{'answerId':this.arrAnswers.join()},function(){console.log('survey data sent');});
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
  this.elem.find('.number').html(arrHistory[0].ResultNumber);
  this.elem.find('.Result').html(arrHistory[0].ResultText);
  this.elem.find('.answers').append(this.BuildAnswers(this, arrHistory[0].answers));
  $('#Resultgroup').show();
};

Result.prototype.ClearResultGroup = function(){
  this.elem.find('.number').empty();
  this.elem.find('.Result').empty().html('loading...');
  this.elem.find('.answers').empty();
};
