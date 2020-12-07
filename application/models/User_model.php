<?php
class User_model extends CI_Model{
	public function create ($formArray)
	{
		$this->db->insert('emps',$formArray);

	}


	public function contact_insert($formArrays)
	{
		$this->db->insert('contact',$formArrays);

	}

	public function all (){

		return $users = $this->db->get('emps')->result_array();
		
	}

	public function getuser($id)
	{
		$this->db->where('id',$id);
		$user = $this->db->get('emps')->row_array();
		return $user;
	}
	public function Update($id , $Update)
	{
		$this->db->where('id', $id);
		$this->db->update('emps', $Update);
		return "Updated";
		
	}

	public function deleteuser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('emps');
		//return "Updated";
		
	}

	
}
?>
