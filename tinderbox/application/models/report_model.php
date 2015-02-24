<?php

class Report_Model extends CI_Model
{
    var $table = "tblAnswer";
    var $pk = "answerId";
    var $ds = "answerTimeStamp";  //Default sortby field
    var $rq = "answerText";		//Required field (you'll need to mod the form validation if there isn't one)
    var $fields = array(
         'answerText' => array('label'=>'Text','type'=>'varchar','constraint'=>255),
         'answerNumber' => array('label'=>'Number','type'=>'int'),
         'answerBitpos' => array('label'=>'BitPos','type'=>'int'),
         'questionId' => array('label'=>'Question','type'=>'int'),
        );

	/** Utility Methods **/
	function _required($required, $data)
	{
		foreach($required as $field)
			if(!isset($data[$field])) return false;

		return true;
	}

	function _default($defaults, $options)
	{
		return array_merge($defaults, $options);
	}

	function _fields(){
		return $this->fields;
	}

	function _table(){
		return $this->table;
	}

	function _pk(){
		return $this->pk;
	}
	// Return default sort field
	function _ds(){
		return $this->ds;
	}
	// Return required field
	function _rq(){
		return $this->rq;
	}
	// Return an array of id and required field
	function _GetRef(){
		$this->db->select($this->pk.",".$this->rq);
		$query = $this->db->get($this->table);

		return $query->result_array();
	}


	/** CRUD Methods **/

	function Get($options = array()){

        //SELECT tblQuestion.questionNumber, tblQuestion.questionText, tblAnswer.answerText, tblSurvey.surveyDetail, tblSurvey.answerId, COUNT( tblSurvey.answerId) AS count FROM tblSurvey LEFT JOIN tblAnswer ON tblSurvey.answerId=tblAnswer.answerId LEFT JOIN tblQuestion ON tblAnswer.questionId=tblQuestion.questionId WHERE tblSurvey.answerId > 0 GROUP BY tblSurvey.AnswerId ORDER BY tblQuestion.questionNumber

		foreach ($this->fields as $key => $value) {
			if(isset($options[$key]))
				$this->db->where($key, $options[$key]);
		}
		if(isset($options[$this->pk]))
				$this->db->where($this->pk, $options[$this->pk]);

		// limit / offset
		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);

		// sort
		if(isset($options['sortBy']) && isset($options['sortDirection']))
			$this->db->order_by($options['sortBy'], $options['sortDirection']);

		$query = $this->db->get($this->table);
		//echo "SQL:".$this->db->last_query();

		if(isset($options['count'])) return $query->num_rows();

		if(isset($options[$this->pk])) return $query->row(0);

		return $query->result();
	}
}

?>
