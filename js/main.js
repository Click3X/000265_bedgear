var API_PATH = "tinderbox/jsonapi/";
var panel = Array();
var question = Array();
var arrHistory = Array();
var currentQues = 0;

function AppInit(){
    DebugOut('initing app');
    panel['result'] = new Result();

    question.push(new Question('question1',1));
    question.push(new Question('question2',2));
    question.push(new Question('question3',3));
    question.push(new Question('question4',4));
    question.push(new Question('question5',5));
    question.push(new MultiChoice('question6',6));
    question.push(new MultiChoice('question7',7));

    // Ask the first question
    question[currentQues].Load();
}

// Pop the current question off the history stack and load the last question from memory
function PreviousQuestion(){
  // Remove the current question from the history
  arrHistory.shift();
  // Adjust the question pointer to the current history item
  currentQues=parseInt(arrHistory[0].questionNumber,10)-1;
  // Render instead of load since we're working off an existing history
  question[currentQues].RenderQuestion();
}

// Increment the question array pointer and load the appropriate panel
function NextQuestion(){
  currentQues++;
  if( currentQues >= question.length ){
    // If the quesiton pointer is at the end of the question array
    panel['result'].Load();
  }else{
    // Load up the latest question
    question[currentQues].Load();
  }
}


$(document).ready(function(){
  AppInit();
});
