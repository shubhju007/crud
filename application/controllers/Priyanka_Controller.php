<?php 
class Priyanka_Controller extends CI_Controller
{
	
	function __construct()
			# code...
	{

		parent::__construct();
	    $this->load->model('Priyanka_Model');
	}

	public function index()
	{
		$data['emp'] = $this->Priyanka_Model->getAllUsers();
		$data['dep'] = $this->Priyanka_Model->getDepData();
		$this->load->view('priyanka',$data);
	}

	public function storeData()
	{
		$this->load->helper('form');
		//print_r($this->input->post());
		 $array = array('EmailId'=>$this->input->post('email'),
						'emp_name'=>$this->input->post('name'),
						'dep_id' => $this->input->post('dep')
					);
		$result = $this->Priyanka_Model->getData($array);
		if ($result > 0) {
			
			echo "Successful Enter Data";
		}
		else
		{
			echo "UnSuccessful Enter Data";
		}

	}

	public function editViewp($id)
	{ 
		$data['dep'] = $this->Priyanka_Model->getDepData();
		$data['useredit'] = $this->Priyanka_Model->edit($id);
		$this->load->view('editviewp',$data);
	}


	public function EditData()
	{
		
		$id = $this->input->post('id');
		$array = array(
			'emp_name'=>$this->input->post('name'),
			'EmailId'=>$this->input->post('email'),
			'dep_id'=>$this->input->post('depid')
		);
		$result = $this->Priyanka_Model->updateData($array, $id);
		if ($result >0) {
			# code...
			redirect(base_url().'priyanka');
			// echo json_encode(['result'=> true]);
		}else
		{
			echo "UnSuccessful enter Data";
			// echo json_encode(['result'=> false]);
		}
	}

}
?>