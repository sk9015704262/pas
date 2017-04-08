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
$this->load->model('company_model');
}
	public function index()

/*loading view the first time*/

	{

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('companyView');
		$this->load->view('footer');





	}
/*adding data to database*/
public function addcompany()
{
	$data= array(
		'comp_name'=>$this->input->post('comp_name'),
		'about'=>$this->input->post('about'),
		'website'=>$this->input->post('website'),
		'hr_name'=>$this->input->post('hr_name'),
		'hr_contact'=>$this->input->post('hr_contact'),
		'dateofPlacement'=>$this->input->post('dateofPlacement'),
		'min_percentage'=>$this->input->post('min_percentage'));

/*transfering data to model*/
$this->company_model->form_insert($data);
$data['message']='success';

/*loading view the second time*/
$this->load->view('header');
$this->load->view('sidebar');
$this->load->view('companyView',$data);
$this->load->view('footer');
}

}


