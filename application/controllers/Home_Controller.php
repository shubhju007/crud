<?php
class Home_Controller extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        if ($this->session->userdata('logged_in') != TRUE) {
	      redirect(base_url()."login");
	    }
    }
    
    public function index()
    {
        $data['users'] = $this->Home_model->getAllUsers();
        $data['dept']  = $this->Home_model->getAllDepart();
        $this->load->view('home', $data);
    }
    
    public function saveUser()
    {
        
        $filename = $this->input->post('name') . rand(1, 9999);
        
        $config['upload_path']   = './images/';
        $config['overwrite']     = TRUE;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 3000;
        $config['max_width']     = 3000;
        $config['max_height']    = 3000;
        $config['file_name']     = $filename;
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('userimage')) {
            $error                               = array(
                'error' => $this->upload->display_errors()
            );
            $data['image_metadata']['file_name'] = "default.png";
        } else {
            $data = array(
                'image_metadata' => $this->upload->data()
            );
        }
        $array  = array(
            'emp_name' => $this->input->post('name'),
            'EmailId' => $this->input->post('email'),
            'dep_id' => $this->input->post('depid'),
            'password' => $this->input->post('password'),
            'userimage' => $data['image_metadata']['file_name']
            
        );
        $result = $this->Home_model->insertUser($array);
        if ($result > 0 && $result != FALSE) {
            # code...
            redirect(base_url() . 'home');
        } else {
            echo "UnSuccessful enter Data";
        }
        
    }
    
    public function editView($id)
    {
        $data['dept'] = $this->Home_model->getAllDepart();
        $data['user'] = $this->Home_model->getUserById($id);
        $this->load->view('editview', $data);
        
    }
    
    public function updateUser()
    {	
    	$filename = $this->input->post('name').time();
        
        $config['upload_path']   = './images/';
        $config['overwrite']     = TRUE;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 3000;
        $config['max_width']     = 3000;
        $config['max_height']    = 3000;
        $config['file_name']     = $filename;
        
        //load file upload library with above configuration
        $this->load->library('upload', $config);
        $data['image_metadata']['file_name'] = '';

        if (!$this->upload->do_upload('userimage')) {
            $uploadError = TRUE;
            // print_r($this->upload->display_errors());
            // die();
        } else {
        	$uploadError = FALSE;
            $data = array(
                'image_metadata' => $this->upload->data()
            );
        }

        $id     = $this->input->post('id');
        $array  = array(
            'emp_name' => $this->input->post('name'),
            'dep_id' => $this->input->post('depid')
        );
        // add image data to variable if image is successfully added
        if (!$uploadError) {
        	$array['userimage'] = $data['image_metadata']['file_name'];
        }
        $result = $this->Home_model->update($array, $id);

        if ($result > 0) {
            redirect(base_url() . 'home');
        } else {
            echo "UnSuccessful enter Data";
        }
    }
    
    public function deleteuser($id)
    {
        $result = $this->Home_model->delete($id);
        if ($result > 0) {
            # code...
            redirect(base_url() . 'home');
        } else {
            echo "UnSuccessful";
        }
        
    }



}

?>