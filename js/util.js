/////////////////////////////////////////////////////////////////////////////
//	Utility Functions
/////////////////////////////////////////////////////////////////////////////

function GASuccess(){
  DebugOut("GA Success!");
}

function GAFail(){
  DebugOut("GA Fail!");
}

function ShowPosition(){
  $('#ypos').html(mousePos.y);
  $('#xpos').html(mousePos.x);
}

function GetObjectPropertyCount(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};

function findPos(obj) {
    var curleft = 0, curtop = 0;
    if (obj.offsetParent) {
        do {
            curleft += obj.offsetLeft;
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
        return { x: curleft, y: curtop };
    }
    return undefined;
}

function ScaleVector(pV, pL){
  vMagnitude = Math.sqrt(pV.x*pV.x + pV.y*pV.y);
  pV.x = pL * pV.x / vMagnitude;
  pV.y = pL * pV.y / vMagnitude;

  return {x:pV.x,y:pV.y};
}

function TransformVector(pA,pB,pT){
  var rX;
  var rY;

  rX = pA.x + (pB.x-pA.x)*pT;
  rY = pA.y + (pB.y-pA.y)*pT;

  return {x:rX,y:rY};
}

function getDistance( point1, point2 ){
  var xs = 0;
  var ys = 0;

  xs = point2.x - point1.x;
  xs = xs * xs;

  ys = point2.y - point1.y;
  ys = ys * ys;

  return Math.sqrt( xs + ys );
}

function supports_html5_storage() {
  try {
    return 'localStorage' in window && window['localStorage'] !== null;
  } catch (e) {
    return false;
  }
}

function DoToggle(self){
  return function(elem){
    DebugOut(elem);

    if( $(elem.target).attr('id') == "checkinAnonymous" ){
      if( $(elem.target).hasClass('fa-square-o') ){
        $(elem.target).removeClass('fa-square-o');
        $(elem.target).addClass('fa-check-square-o');
        //$('#msgAnonymous').html(lang.en.checkinAnonymous);
      }else{
        $(elem.target).addClass('fa-square-o');
        $(elem.target).removeClass('fa-check-square-o');
        //$('#msgAnonymous').html(lang.en.checkinPublic);
      }
    }else if( $(elem.target).attr('id') == "checkinTwitter" ){
      if( $(elem.target).hasClass('fa-square-o') ){
        $(elem.target).removeClass('fa-square-o');
        $(elem.target).addClass('fa-check-square-o');
        $(elem.target).toggleClass('selected');
      }else{
        $(elem.target).addClass('fa-square-o');
        $(elem.target).removeClass('fa-check-square-o');
        $(elem.target).toggleClass('selected');
      }
    }else{
      $(elem.target).toggleClass('selected');
    }

    DebugOut($(elem.target).attr('id'));
    DebugOut($(elem.target).hasClass('selected'));

    if( $(elem.target).attr('id') == "checkinTwitter" && $(elem.target).hasClass('selected') ){
      DebugOut("showing");
      $('#cloudComment').show();
    }else{
      DebugOut("hiding");
      $('#cloudComment').hide();
    }
  };

}

// If the browser has a console, write to it.
function DebugOut(newline){
  try{
    if (typeof console == "object"){
      console.log(newline);
    }
  }catch(err){

  }

}
