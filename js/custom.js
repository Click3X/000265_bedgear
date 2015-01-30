/*	Responsive Boilerplate
		Designed & Built by Fernando Monteiro, http://www.newaeonweb.com.br
		Licensed under MIT license, http://opensource.org/licenses/mit-license.php
*/

//Hide the url bar on smartphones
/*
 * Normalized hide address bar for iOS & Android
 * (c) Scott Jehl, scottjehl.com
 * MIT License
 */
(function (win) {
		var doc = win.document;

		// If there's a hash, or addEventListener is undefined, stop here
		if (!location.hash && win.addEventListener) {

				//scroll to 1
				window.scrollTo(0, 1);
				var scrollTop = 1,
						getScrollTop = function () {
								return win.pageYOffset || doc.compatMode === "CSS1Compat" && doc.documentElement.scrollTop || doc.body.scrollTop || 0;
						},

				//reset to 0 on bodyready, if needed
						bodycheck = setInterval(function () {
								if (doc.body) {
										clearInterval(bodycheck);
										scrollTop = getScrollTop();
										win.scrollTo(0, scrollTop === 1 ? 0 : 1);
								}
						}, 15);

				win.addEventListener("load", function () {
						setTimeout(function () {
								//at load, if user hasn't scrolled more than 20 or so...
								if (getScrollTop() < 20) {
										//reset to hide addr bar at onload
										win.scrollTo(0, scrollTop === 1 ? 0 : 1);
								}
						}, 0);
				});
		}
})(this);


//Simple function to a responsive menu
(function () {
		$("#nav").before('<div id="menu"> <span>&#9776</span> </div>');

		$("#menu").on('click', function () {
				$("#nav").toggle();
		});

		$(window).resize(function () {
				if (window.innerWidth > 768) {
						$("#nav").removeAttr("style");
				}
		});
})(this);
//apply to any markup with nav like this:
/*

 <ul id="nav">
 <li><a href="#">Link</a></li>
 <li><a href="#">Link</a></li>
 <li><a href="#">Link</a></li>
 <li><a href="#">Link</a></li>
 <li><a href="#">Link</a></li>
 </ul>


 */

//Add your scripts here

var LAST_QUESTION_NUMBER = 4;

var currentQues = 1;
var arrAnswers = [];
var bitTotal = 0;


$(document).ready(function() {
	$('#questiongroup').hide();
	$('#resultgroup').hide();
	AskQuestion();
});

function GetResult(){
	$('#questiongroup').hide();
	$.get('tinderbox/jsonapi/result/'+bitTotal,HandleResult);

}

function HandleResult(response){
	console.log(response);
	$.each(response.data,function(idx, product){
		$('#resultgroup .products').append($('<li/>').append(product.productName));
	});
	$('#resultgroup').show();
}

function AskQuestion(){
	console.log('loading question',currentQues);
	$('#questiongroup .number').empty();
	$('#questiongroup .question').empty().html('loading...');
	$('#questiongroup .answers').empty();
	$.get('tinderbox/jsonapi/question/'+currentQues,HandleQuestion);
}

function HandleQuestion(response){
	$('#questiongroup .number').html(response.question[0].questionNumber);
	$('#questiongroup .question').html(response.question[0].questionText);
	$.each(response.answers,function(idx, answer){
		$('#questiongroup .answers').append($('<li/>').append($('<button/>').html(answer.answerText).click(TallyMon(answer.answerId,answer.answerBitpos))));
	});
	$('#questiongroup').show();
}

function TallyMon(pId, pVal){
	return function(){
		arrAnswers.push(pId);
		bitTotal += parseInt(pVal);
		console.log('tally',arrAnswers,bitTotal);
		currentQues++;

		if( currentQues > LAST_QUESTION_NUMBER ){
			GetResult();
		}else{
			AskQuestion();
		}
	}
}
