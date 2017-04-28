<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

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
	$this->load->model('resume_model');
	$this->load->model('student_model');
	}
	public function index()

/*loading view the first time*/

	{

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('resumeView');
		$this->load->view('footer');





	}
/*adding data to database*/
public function makeResume()
{
	$data= array(
		'skill1'=>$this->input->post('skill1'),
		'skill2'=>$this->input->post('skill2'),
		'skill3'=>$this->input->post('skill3'),
		'skill4'=>$this->input->post('skill4'),
		'technical'=>$this->input->post('technical'),
		'project1'=>$this->input->post('project1'),
		'project2'=>$this->input->post('project2'),
		'hobbies'=>$this->input->post('hobbies'),
		);
		

/*transfering data to model*/
$this->resume_model->form_insert($data);
$data['message']='success';

/*loading view the second time*/
$this->load->view('header');
$this->load->view('sidebar');
$this->load->view('resumePreView',$data);
$this->load->view('footer');
}

}


