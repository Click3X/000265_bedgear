/* Author: Matthew Wilber ( http://www.mwilber.com )

*/
var imgCt = 0;
var hideRequired = true;
var timeoutCk;
var ctCk = 0;

///////////////////////////////////////////////////////////////
// Image Preloader
///////////////////////////////////////////////////////////////

function PreLoader(pTarget)
{
	if( $(pTarget).find('img').length > 0 ){
		imgCt += $(pTarget).find('img').length;
		//console.log('imgCt: '+imgCt);
		DisplayLoader(pTarget);
		ErrCk();
		$(pTarget).find('img').each(function(index) {
	    	//console.log(index + ': ' + $(this).attr('cache'));
	    	var _image = new Image();
	    	//console.log('loading image: '+$(this).attr('cache'));
	        _image.src = $(this).attr('cache');
	        $(_image).error(function(e) {
	        	// There needs to be a way to handle a required image on error
	        	////console.log(e.target.html);
	        	//input[value="Hot Fuzz"]
	    		CheckImageLoad();
	  		}).load( function(){CheckImageLoad(pTarget)} );
		});
	}else{
	}
}

function ErrCk(){
	//alert("ErrCk: "+ctCk+":"+imgCt);
	if( ctCk === imgCt){
		//ShowImages();
	}else{
		ctCk = imgCt;
		timeoutCk = setTimeout(ErrCk, 8000);
	}


}

function CheckImageLoad(pTarget){
	//console.log('Checking against '+$(pTarget).find('img').length+' images');
	if($(pTarget).find('img').length > 0){
		//console.log(Math.floor((($(pTarget).find('img').length-(imgCt-1))/$(pTarget).find('img').length)*100)+'%');
		$('#preloader h2').html(Math.floor((($(pTarget).find('img').length-(imgCt-1))/$(pTarget).find('img').length)*100)+'%');
	}
	if( imgCt > 1 ){
    	//console.log('imgCt: '+imgCt);
    	imgCt--;
    }else{
    	//console.log('load set');
    	imgCt=0;
    	ShowImages();
    }
}

function ShowImages(){
	$('img').each(function(index) {
		if($(this).attr('cache')){
			//console.log(index + ': ' + $(this).attr('cache'));
			$(this).attr('src', $(this).attr('cache'));
		}
	});
	HideLoader();
}

function HideLoader(){
	$('#preloader').remove();
	intro_view.HandleAnimate();
	//NextQuestion();
}

function DisplayLoader(pTarget){
	//console.log('Loading: '+pTarget.css('height')+', '+pTarget.css('width'));
	var divLoader = $('<div></div>');
	divLoader.attr('id','preloader');
	divLoader.css('position','absolute');
	divLoader.css('height','100%');
	divLoader.css('width','100%');
	divLoader.css('color','#5da6f5');
	divLoader.css('backgroundColor','rgba(0,0,0,0.9)');
	divLoader.css('z-index','2000');
	divLoader.append('<div style=" position:absolute; text-align:center; top:40%; width:100%; font-size:30px; font-weight:bold;">Loading...<br/><h2 style="margin-top:5px; font-size:60px;">0%</h2></div>');
	pTarget.prepend(divLoader);
}
