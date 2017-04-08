<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct() {
parent::__construct();
$this->load->model('student_model');
	}


public function index()
	{
		

$this->load->view('header');
$this->load->view('sidebar');
		$this->load->view('studentsView');
		$this->load->view('footer');
	}


public function addStudent(){

//Setting values for tabel columns
$data = array(
'name' => $this->input->post('name'),
'fname' => $this->input->post('mname'),
'mname' => $this->input->post('mname'),
'dob' => $this->input->post('dob'),
'address' => $this->input->post('address'),
'course' => $this->input->post('course'),
'branch' => $this->input->post('branch'),
'10school' => $this->input->post('10school'),
'10percentage' => $this->input->post('10percent'),
'10year' => $this->input->post('10year'),
'12school' => $this->input->post('12school'),
'12percentage' => $this->input->post('12percent'),
'12year' => $this->input->post('12year'),
'pgschool' => $this->input->post('pgschool'),
    'pgpercentage' => $this->input->post('pgpercent'),
'pgyear' => $this->input->post('pgyear'),
'gradcollege' => $this->input->post('gradcollege'),
'gradpercentage' => $this->input->post('gradpercent'),
    'gradyear' => $this->input->post('gradyear'),
'pgyear' => $this->input->post('pgyear'),
'pgpercentage' => $this->input->post('pgpercent'),
'pgyear' => $this->input->post('pgyear')

);
//Transfering data to Model
$this->student_model->form_insert($data);
$data['message'] = 'Success';


//Loading View
$this->load->view('header');
$this->load->view('sidebar');
$this->load->view('studentsView', $data);
$this->load->view('footer');

	}


}
