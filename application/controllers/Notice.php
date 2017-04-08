<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

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


        //load the method of model
        $data['notices']=$this->notice_modal->select();
        $this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('noticeView',$data);
		$this->load->view('footer');





	}

public function addNotice(){

//Setting values for tabel columns
$data = array(
'title' => $this->input->post('title'),
'body' => $this->input->post('body'),
'sender' => $this->input->post('sender'),
'date' => $this->input->post('date')
);
//Transfering data to Model
$this->notice_modal->form_insert($data);
$data['message'] = 'Success';
//Loading View
    $notice['notices']=$this->notice_modal->select();
$this->load->view('header');
$this->load->view('sidebar');
$this->load->view('noticeView',$data,$notice);
$this->load->view('footer');

	}


}


