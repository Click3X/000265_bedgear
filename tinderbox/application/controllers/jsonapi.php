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
			$pQobj->answers = $this->answer_model->Get(array('questionId'=>$pQobj->questionId, 'sortBy'=>'answerNumber','sortDirection'=>'ASC'));
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

	function allquestions($pNumber = 0){
		$this->load->model('question_model');
		$this->load->model('answer_model');

		$this->_response->question = array();

		$qrs = $this->question_model->Get(array('answerId'=>0,'sortBy'=>'questionNumber','sortDirection'=>'ASC'));

		foreach($qrs as $idx=>$question){
			array_push($this->_response->question, $this->_BuildQuestion($question->questionNumber, 0));
		}

		$this->_JSONout();
	}

	function result($pBitInt){
		$this->load->model('resultproduct_model');
		$this->load->model('benefit_model');
		$this->_response->data = $this->resultproduct_model->GetWithProd(array('resultproductBitint'=>$pBitInt,'sortBy'=>'resultproductNumber','sortDirection'=>'ASC'));

		foreach( $this->_response->data as $idx=>$prod ){
			$this->_response->data[$idx]->benefits = $this->benefit_model->Get(array('productId'=>$this->_response->data[$idx]->productId));
		}

		$this->_JSONout();
	}

	function survey(){
		$this->load->helper('uuid_helper');
		$this->load->model('survey_model');

		$this->_response->error->type = -1;
		$this->_response->error->message = "could not add records to table";

		if( isset($_POST['answers']) ){
			$uuid = gen_uuid();
			//$arrAnswers = explode(",",$_POST['answers']);
			$arrAnswers = json_decode($_POST['answers']);
			//print_r($arrAnswers);
			foreach($arrAnswers as $answer){
				$arrAnswerId = explode(",",$answer->answerId);
				foreach($arrAnswerId as $answerId){
					if($answerId != 0 || $answer->surveyDetail != "")
						$this->survey_model->Add(array('surveyUUID'=>$uuid,'answerId'=>$answerId,'surveyDetail'=>$answer->surveyDetail));
				}
			}

			$this->_response->error->type = 0;
			$this->_response->error->message = "success";
			$this->_response->data = new stdClass();
			$this->_response->data->sessionId = $uuid;
		}else{
			$this->_response->error->message = "no POST  data";
		}
		$this->_JSONout();
	}

	function profile(){
		$this->load->model('profile_model');

		$this->_response->error->type = -1;
		$this->_response->error->message = "could not add records to table";

		$nid = $this->profile_model->Add($_POST);

		$this->_response->error->type = 0;
		$this->_response->error->message = "success";
		$this->_response->data = new stdClass();
		$this->_response->data->sessionId = $_POST['surveyUUID'];
		$this->_response->data->nid = $nid;

		$this->_JSONout();
	}

	function mailtest(){
		require_once 'mandrill-api-php/src/Mandrill.php'; //Not required with Composer


		try {
			$mandrill = new Mandrill('XrdDO0F9tIoY1qLs6H_lSw');
		    $message = array(
		        'html' => '<p>Example <strong>HTML</strong> content</p>',
		        'text' => 'Example text content',
		        'subject' => 'example subject two',
		        'from_email' => 'mattw@click3x.com',
		        'from_name' => 'Example Name',
		        'to' => array(
		            array(
		                'email' => 'mwilber@gmail.com',
		                'name' => 'Recipient Name',
		                'type' => 'to'
		            )
		        ),
		        'headers' => array('Reply-To' => 'mattw@click3x.com'),
		        // 'important' => false,
		        // 'track_opens' => null,
		        // 'track_clicks' => null,
		        // 'auto_text' => null,
		        // 'auto_html' => null,
		        // 'inline_css' => null,
		        // 'url_strip_qs' => null,
		        // 'preserve_recipients' => null,
		        // 'view_content_link' => null,
		        // 'bcc_address' => 'mattw@click3x.com',
		        // 'tracking_domain' => null,
		        // 'signing_domain' => null,
		        // 'return_path_domain' => null,
		        // 'merge' => true,
		        // 'merge_language' => 'mailchimp',
		        // 'global_merge_vars' => array(
		        //     array(
		        //         'name' => 'merge1',
		        //         'content' => 'merge1 content'
		        //     )
		        // ),
		        // 'merge_vars' => array(
		        //     array(
		        //         'rcpt' => 'mwilber@gmail.com',
		        //         'vars' => array(
		        //             array(
		        //                 'name' => 'merge2',
		        //                 'content' => 'merge2 content'
		        //             )
		        //         )
		        //     )
		        // ),


		        //'tags' => array('password-resets'),
		        //'subaccount' => 'customer-123',
		        //'google_analytics_domains' => array('example.com'),
		        //'google_analytics_campaign' => 'message.from_email@example.com',
		        //'metadata' => array('website' => 'www.example.com'),
		        // 'recipient_metadata' => array(
		        //     array(
		        //         'rcpt' => 'recipient.email@example.com',
		        //         'values' => array('user_id' => 123456)
		        //     )
		        // ),
		        // 'attachments' => array(
		        //     array(
		        //         'type' => 'text/plain',
		        //         'name' => 'myfile.txt',
		        //         'content' => 'ZXhhbXBsZSBmaWxl'
		        //     )
		        // ),
		        // 'images' => array(
		        //     array(
		        //         'type' => 'image/png',
		        //         'name' => 'IMAGECID',
		        //         'content' => 'ZXhhbXBsZSBmaWxl'
		        //     )
		        // )
		    );
		    $async = false;
		    $result = $mandrill->messages->send($message, $async);
		    print_r($result);
		    /*
		    Array
		    (
		        [0] => Array
		            (
		                [email] => recipient.email@example.com
		                [status] => sent
		                [reject_reason] => hard-bounce
		                [_id] => abc123abc123abc123abc123abc123
		            )

		    )
		    */
		} catch(Mandrill_Error $e) {
		    // Mandrill errors are thrown as exceptions
		    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
		    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
		    throw $e;
		}
	}

	function sendmail($pTo, $pProd1, $pProd2, $pProd3, $mailtemplate = "share")
	{
		$imgpath = base_url().'email_templates/images/';
		$prodimgpath = base_url().'images/products/';

		$imgpath = 'http://staging.click3x.com/bedgear/productselector/tinderbox/'.'email_templates/images/';
		$prodimgpath = 'http://staging.click3x.com/bedgear/productselector/tinderbox/'.'images/products/';

		$toEmail = $pTo;
		if($toEmail == "mwilber") $toEmail = "mwilber@gmail.com";
		$toName = "";
		if(isset($_POST['toName'])){
			$toName = $_POST['toName'];
		}
		$fromEmail = "mattw@click3x.com";
		$fromName = "Bedgear";


		$message = "Template";

		$this->load->model('emaildata_model');
		$this->load->model('product_model');
		$this->load->model('benefit_model');

		// Get the product information
		$p1 = $this->product_model->Get(array('productId'=>$pProd1));
		$p2 = $this->product_model->Get(array('productId'=>$pProd2));
		$p3 = $this->product_model->Get(array('productId'=>$pProd3));

		//Build the benefits string
		$benes = "<p style=\"font-size:12px; font-weight:bold; line-height:20px;\">";
		$rsb = $this->benefit_model->Get(array('productId'=>$pProd1));
		foreach($rsb as $bene){
			$benes .= "<span style=\"color:#14A4ED;\">&#8226;&nbsp;</span>".str_replace("<br/>","",$bene->benefitName)."<br/>";
		}
		$benes .= "</p>";

		$docc = false;
		$optout = 0;

		// Build the html email
		$emailBody="";

		$file = fopen("email_templates/".$mailtemplate.".html", "r");

		while(!feof($file)) {
			//read file line by line into variable
			$emailBody = $emailBody . fgets($file, 4096);
		}
		fclose ($file);

		// Fill in dynamic values
		$arrFind = array(	"{IMGROOT}",
							"{PROD1}",
							"{PROD2}",
							"{PROD3}",
							"{PRODNAME}",
							"{BUYNOW}",
							"{PRODURL1}",
							"{PRODURL2}",
							"{PRODURL3}",
							"{BULLETS}"
						);
		$arrReplace = array(
							$imgpath,
							$prodimgpath.$p1->productImage,
							$prodimgpath.$p2->productImage,
							$prodimgpath.$p3->productImage,
							$p1->productName,
							$p1->productStoreUrl,
							$p1->productUrl,
							$p2->productUrl,
							$p3->productUrl,
							$benes
							);
		$emailBody = str_replace($arrFind, $arrReplace, $emailBody);

		//echo $emailBody;
		//die;

		if(true){
			// Send via mandrill
			require_once 'mandrill-api-php/src/Mandrill.php'; //Not required with Composer


			try {
				$mandrill = new Mandrill('XrdDO0F9tIoY1qLs6H_lSw');
			    $message = array(
			        'html' => $emailBody,
			        'text' => 'HTML not supported in this client.',
			        'subject' => 'Your Ideal Bedgear',
			        'from_email' => $fromEmail,
			        'from_name' => $fromName,
			        'to' => array(
			            array(
			                'email' => $toEmail,
			                'name' => '',
			                'type' => 'to'
			            )
			        ),
			        'headers' => array('Reply-To' => $fromEmail),
			    );
			    $async = false;
			    $result = $mandrill->messages->send($message, $async);
			    print_r($result);

			} catch(Mandrill_Error $e) {
			    // Mandrill errors are thrown as exceptions
			    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
			    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
			    throw $e;
			}


		}else{
			// Send html email via sendmail
			$this->load->library('email');
			$config['charset'] = 'iso-8859-1';
			$config['mailtype'] = 'html';
			//$config['protocol'] = 'sendmail';
			$this->email->initialize($config);

			$this->email->from($fromEmail, $fromName);
			$this->email->to($toEmail, $toName);
			if( $docc ){
				$this->email->bcc($fromEmail);
			}

			//(Recipient�s name), (Sender�s name) sent you a Pawtrait!
			$this->email->subject('Your Ideal Bedgear');

			$this->email->message($emailBody);

			// Store data if email was sent successfully
			if( $this->email->send() ){
				//$this->emaildata->setData($toEmail, $toName, $fromEmail, $fromName, $message, $filename, $flashdata, $optout);
				$fields = array(
					 'emailToName' => $toName,
					 'emailFrom' => $fromEmail,
			         'emailFromName' => $fromName,
			         'emailMessage' => $message,
					);
				$nId = $this->emaildata_model->Add($fields);
				echo "success";
			}else{
				echo $this->email->print_debugger();
			}
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
