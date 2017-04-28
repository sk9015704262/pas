<?php
class Resume_model extends CI_Model {


	function __construct() {
		parent::__construct();
	}
	function form_insert($data){

		$this->db->insert('resume', $data);
	}

	function form_get(){
		
		$data=$this->db->get('resume');
		return $data;
	}

}
?>
