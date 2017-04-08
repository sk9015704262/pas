<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
$this->load->model('student_model');
$this->load->model('notice_modal');
	}

	public function index()
	{

		$data['student']=$this->student_model->form_get('3');
        $data['notices']=$this->notice_modal->notice_get('3');
        

$this->load->view('header');
$this->load->view('sidebar');
		$this->load->view('dashboardView',$data);
		$this->load->view('footer');
	}
}
