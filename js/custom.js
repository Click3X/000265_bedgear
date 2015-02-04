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

var LAST_QUESTION_NUMBER = 7;

var currentQues = 1;
var arrAnswers = [];
var arrHistory = [];
//var bitTotal = 0;


$(document).ready(function() {
	$('#questiongroup').hide();
	$('#resultgroup').hide();
	AskQuestion();
});

function GoBack(){
	arrHistory.shift();
	currentQues=parseInt(arrHistory[0].questionNumber,10);
	RenderQuestion();
}

function GetResult(){
	$('#questiongroup').hide();
	var bitTotal = 0;
	$.each(arrHistory, function(idx, question){
		bitTotal += question.answerBit;
		arrAnswers.push(question.answerChoice);
	});
	console.log('tally',arrAnswers,bitTotal);
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
	ClearQuestionGroup();
	$.get('tinderbox/jsonapi/question/'+currentQues,HandleQuestion);
}

function HandleQuestion(response){
	if( response.question ){
		arrHistory.unshift(response.question);
		console.log('history', arrHistory);
		RenderQuestion();
	}else{
		// If no question comes back, assume we're at the end of the quiz
		GetResult();
	}
}

function RenderQuestion(){
	ClearQuestionGroup();
	$('#questiongroup .number').html(arrHistory[0].questionNumber);
	$('#questiongroup .question').html(arrHistory[0].questionText);
	$('#questiongroup .answers').append(BuildAnswers(arrHistory[0].answers));
	$('#questiongroup').show();
}

function ClearQuestionGroup(){
	$('#questiongroup .number').empty();
	$('#questiongroup .question').empty().html('loading...');
	$('#questiongroup .answers').empty();
}

function BuildAnswers(pArrAns, pTarget){
	var tmpList = $('<ul/>');
	$.each(pArrAns,function(idx, answer){
		var tmpItem = $('<li/>').append($('<button/>').html(answer.answerText).click(TallyMon(answer.answerId,answer.answerBitpos, answer.question)));
		tmpList.append(tmpItem);
	});

	return tmpList;
}

function TallyMon(pId, pVal, pQues){
	return function(pTarget){
		console.log('pQues',pQues);
		console.log('pVal', pVal);

		arrHistory[0].answerChoice = pId;
		arrHistory[0].answerBit = parseInt(pVal,10)

		if( pQues ){
			// Handle a sub-question
			HandleQuestion({'question':pQues});
		}else{
			// Ask the next question
			currentQues++;
			AskQuestion();
		}
	};
}
