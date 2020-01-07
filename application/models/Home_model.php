<?php
class Home_model extends CI_Model
{
	public function getAllUsers()
	{
		# code...
		// $userData = $this->db->query('select employee.* , dept_name from employee left join department on employee.dep_id=department.dep_id')->result();
		$userData = $this->db->query('select employee.* , dep_name from employee, department where employee.dep_id=department.dep_id')->result();
		return $userData;
	}

	public function insertUser($data)
	{
		$emailExists = $this->db->query('select * from employee where EmailId="'.$data['EmailId'].'"')->num_rows();
		if ($emailExists > 0) {
			return FALSE;
		} else {
			$this->db->insert('employee',$data);
			return $this->db->affected_rows();
		}
	}

	public function getAllDepart(){
		$dep = $this->db->get('department')->result();
		return $dep;
	}

	public function getUserById($id)
	{
		$this->db->where('emp_id',$id); 
		// also array can be used to set where clause eg: $this->db->where(array('id' => $id));

		$userData = $this->db->get('employee')->row();
		return $userData;
	}
	public function update($data,$id)
	{
		$this->db->where('emp_id', $id);
    $this->db->update('employee',$data);
    return $this->db->affected_rows();
	}
	public function delete($id)
	{
		$this->db->where('emp_id', $id);
        $this->db->delete('employee');
        return $this->db->affected_rows();
	}

	public function verifyUser($data)
	{
		$this->db->where($data);
		// also array can be used to set where clause eg: $this->db->where(array('id' => $id));

		$userData = $this->db->get('employee')->row();
		return $userData;
	}

	public function forgotPasswordSave($data) {
			$this->db->insert('forgotpassword',$data);
			return $this->db->affected_rows();
	}

	public function verifyForgotPassLink($email, $timestamp) {
			$this->db->select('timestamp');
			$this->db->where('email', $email);
			$this->db->limit(1);
			$this->db->order_by('timestamp', 'DESC');
			$dbTimestamp = $this->db->get('forgotpassword')->row();
			

			if ($dbTimestamp) {
				if ($dbTimestamp->timestamp == $timestamp) {
					$output = 1; // link valid
				} else if($dbTimestamp->timestamp < $timestamp){
					$output = 2; // link expired
				} else {
					$output = 3; // link invalid
				}
			} else {
				$output = 3; //link invalid
			}

			return $output;
	}

	public function saveNewPassword($emailData, $newpassword) {
			$this->db->where($emailData);
			$this->db->update('employee',$newpassword);
			return $this->db->affected_rows();
	}
}

?>