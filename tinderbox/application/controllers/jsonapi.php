<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JSONAPI extends CI_Controller {

	var $_response;

	function JSONAPI(){

		parent::__construct();

		$this->load->model('user_model');

		$this->_response = new stdClass();
		$this->_response->error = new stdClass();

		$this->_response->error->type = 0;
		$this->_response->error->message = "";

	}

	function _JSONout(){
		header('Access-Control-Allow-Origin: *');
		header('Content-type: application/json');
		echo json_encode($this->_response);
	}

	function _HandleSession($pUserToken = ""){
		if($this->session->userdata('userId') == "" && $pUserToken != ""){
			//Try to restore the user session here
			$this->load->helper('idobfuscator_helper');
			$pUserToken = IdObfuscator::decode($pUserToken);
			$this->user_model->Restore(array('userToken'=>$pUserToken));
		}
		if($this->session->userdata('userId') == ""){
			$this->_response->error->type = -1;
			$this->_response->error->message = "Not logged in";
			return false;
		}else{
			return true;
		}
	}

	function _BuildQuestion($pQn = 0, $pAid = 0){

		//echo "BUILDING QUESTION!!!!! (".$pQn.")(".$pAid.")";

		$pQobj = $this->question_model->Get(array('questionNumber'=>$pQn, 'answerId'=>$pAid));

		if( isset($pQobj[0]->questionId) ){
			// Get rid of the array. If there's more than one question it's a data entry error
			$pQobj = $pQobj[0];

			// Get the array of answers
			$pQobj->answers = $this->answer_model->Get(array('questionId'=>$pQobj->questionId));
			// Find out if there's a sub squestion
			foreach( $pQobj->answers as $idx=>$answer ){
				$pQobj->answers[$idx]->question = $this->_BuildQuestion($pQn, $answer->answerId);
			}
		}else{
			$pQobj = false;
		}
		//print_r($pQobj);
		return $pQobj;
	}

	function question($pNumber = 0){
		$this->load->model('question_model');
		$this->load->model('answer_model');

		$this->_response->question = $this->_BuildQuestion($pNumber, 0);

		$this->_JSONout();
	}

	function result($pBitInt){
		$this->load->model('resultproduct_model');
		$this->_response->data = $this->resultproduct_model->GetWithProd(array('resultproductBitint'=>$pBitInt,'sortBy'=>'resultproductNumber','sortDirection'=>'ASC'));

		$this->_JSONout();
	}
	
	function survey(){
		$this->load->helper('uuid_helper');
		$this->load->model('survey_model');
		
		$this->_response->error->type = -1;
		$this->_response->error->message = "could not add records to table";
		
		if( isset($_POST['answerId']) ){
			$uuid = gen_uuid();
			$arrAnswers = explode(",",$_POST['answerId']);
			
			foreach($arrAnswers as $answerId){
				$this->survey_model->Add(array('surveyUUID'=>$uuid,'answerId'=>$answerId));
			}
			
			$this->_response->error->type = 0;
			$this->_response->error->message = "success";
		}else{
			$this->_response->error->message = "no POST  data";
		}
		$this->_JSONout();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
