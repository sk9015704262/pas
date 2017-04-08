<?php
class Student_model extends CI_Model {

   
function __construct() {
parent::__construct();
}
function form_insert($data){

$this->db->insert('students', $data);
}

function form_get(){

	$data=$this->db->get('students');
	return $data;
}

}
?>
