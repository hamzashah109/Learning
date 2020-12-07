<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('User_model');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function create_contact()
	{
		    $data = array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'subject'=>$this->input->post('subject'),
			'message'=>$this->input->post('message'),
	
	

			
	);
	// redirect(base_url().'index.php/welcome/');
		 //$this->User_model->contact_insert($data);
	
		
//$this->session->set_flashdata('success','Record Submit');
	//redirect(base_url().'index.php/welcome/');

		//$this->load->view('welcome_message');
	}
}
