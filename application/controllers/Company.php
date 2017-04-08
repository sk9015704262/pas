<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

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
$this->load->model('notice_modal');
}
	public function index()



	{

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('companyView');
		$this->load->view('footer');





	}

public function addCompany(){

//Setting values for tabel columns
$data = array(
'title' => $this->input->post('title'),

);
//Transfering data to Model
$this->notice_modal->form_insert($data);
$data['message'] = 'Success';
//Loading View
$this->load->view('header');
$this->load->view('sidebar');
$this->load->view('noticeView', $data);
$this->load->view('footer');

	}


}


