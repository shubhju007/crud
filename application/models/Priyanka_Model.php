<?php
class Priyanka_Model extends CI_Model
{
	
	public function getAllUsers()
	{
		$answer = $this->db->query('select employee.* , dep_name from employee left join department on department.dep_id = employee.dep_id')->result();
		return $answer;

	}

	public function getData($data)
	{
		$this->db->insert('employee',$data);
		return  $this->db->affected_rows();

	}
	public function getDepData()
	{
		$answer = $this->db->get('department')->result();
		return $answer;
	}
	public function edit($id)
	{
		$this->db->where('emp_id',$id);
	    $useredit =	$this->db->get('employee')->row();
	    return $useredit;
		
	}
	public function updateData($data,$id)
	{
		$this->db->where('emp_id',$id);
		$this->db->update('employee',$data);
		return $this->db->affected_rows();
	}
}
	