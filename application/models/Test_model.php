<?php
class Test_model extends CI_Model
{
	
	public function getAllUsers()
	{
		# code...
		$ans = $this->db->get('tblusers')->result();
		return $ans;

	}
	public function insertUser($data)
	{
		$this->db->insert('tblusers',$data);
		return $this->db->affected_rows();
	}
	public function getUserbyId()
	{
		$this->db->where('id',$id);
		return $this->db->get('tblusers')->rows();
	}


}
?>