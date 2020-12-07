<?php 
class User extends CI_Controller{

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('User_model');
	}
	
	public function index(){
	$this->load->model('User_model');
	$users = $this->User_model->all();
	$data = array();
	$data['users']= $users ;

	$this->load->view('list',$data);

}

public function create(){

	$this->load->model('User_model');
	$this->form_validation->set_rules('name','Name','required');
	$this->form_validation->set_rules('address','Address','required');
	if($this->form_validation->run() == false){
	$this->load->view('create');
	

}
else{
	$formArray = array();

	$formArray ['name'] = $this->input->post('name');
	$formArray ['address'] = $this->input->post('address');
	$this->User_model->create($formArray);
//	$this->session->set_flashdata('success','Record Submit');
	redirect(base_url().'index.php/user/index');


}
}


public function edit($ids)
{
	
	$user = $this->User_model->getuser($ids);
	$data['user'] = $user;
    $this->load->view('edit',$data);
}
public function EditData()
{
		
	
		$Update["name"] = $this->input->post('name');
		$Update["address"] = $this->input->post('address');
		$id = $this->input->post('id');
		$msg = $this->User_model->Update($id ,$Update);
		redirect('user/index');
		//echo $msg;

}
 function delete($id)
{
	$this->load->model('User_model');
	//$user = $this->User_model->getUser($id)
	//if (empty($user)){
	
		//$this->session->set_flashdata('Faillure','Record Not Found Database');
	//	redirect('user/index');
	//}

$this->User_model->deleteuser($id);
//$this->session->set_flashdata('Faillure','Record Not Found Database');
	redirect('user/index');











		
}




}


?>
