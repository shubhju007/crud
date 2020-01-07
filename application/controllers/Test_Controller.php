<?php 
class Test_Controller extends CI_Controller
{
	
 public	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('Test_model');


	}
	public function index()
	{
		$data['details'] = $this->Test_model->getAllUsers();
		$this->load->view('test',$data);
	}
	public  function storeUser()
	{
		# code...
		 $array = array(
		    'FirstName'=>$this->input->post('name'),
			'EmailId'=>$this->input->post('email')
		 
		 );
		 $res = $this->Test_model->insertUser($array);
		 {
		 	if ($res > 0) {
		 		# code...
		 		echo "Sucessful";
		 	}
		 	else
		 	{
		 		echo "unsuccessful";
		 	}
		 }
		
	}

	public function geteditview()
	{
     $data['user'] = $this->Home_model->getUserbyId($id);
		$this->load->view('edittest',$data);
	}
}
?>