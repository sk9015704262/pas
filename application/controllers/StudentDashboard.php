<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentDashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to uthe following URL
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
$this->load->model('company_model');
$this->load->model('notice_modal');
	}

	public function index()
	{

		$data['company']= $this->company_model->form_get();
      
      	$this->load->view('header');
		$this->load->view('sidebar_student');
		$this->load->view('sdashboardView',$data);
		$this->load->view('footer');
	}
}
