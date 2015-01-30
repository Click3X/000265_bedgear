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

	function question($pNumber = 0){
		$this->load->model('question_model');
		$this->load->model('answer_model');
		$this->_response->question = $this->question_model->Get(array('questionNumber'=>$pNumber));
		if( isset($this->_response->question[0]->questionId) ){
			$this->_response->answers = $this->answer_model->Get(array('questionId'=>$this->_response->question[0]->questionId));
		}

		$this->_JSONout();
	}

	function result($pBitInt){
		$this->load->model('resultproduct_model');
		$this->_response->data = $this->resultproduct_model->GetWithProd(array('resultproductBitint'=>$pBitInt,'sortBy'=>'resultproductNumber','sortDirection'=>'ASC'));

		$this->_JSONout();
	}

	// function galleryitem($pId = 0){
	// 	$this->load->model('artwork_model');
	// 	$this->_response->data = $this->artwork_model->Get(array('artworkId'=>$pId));
	//
	// 	$this->_JSONout();
	// }
	//
	// function dlimg($pId = 0){
	// 	$this->load->model('artwork_model');
	// 	$this->_response->data = $this->artwork_model->Get(array('artworkId'=>$pId));
	// 	//print_r( $this->_response->data->artworkImage );
	//
	// 	if( isset($this->_response->data->artworkImage)){
	// 		$imgPng= imagecreatefrompng( $this->_response->data->artworkImage );
	// 		imageAlphaBlending($imgPng, true);
	// 		imageSaveAlpha($imgPng, true);
	// 		header('Content-type: image/png');
	// 		header('Content-Disposition: attachment; filename="skippy_art.png"');
	// 		imagePng($imgPng);
	// 	}
	//
	// }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
