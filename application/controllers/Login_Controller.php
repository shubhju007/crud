<?php
class Login_Controller extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        
    }

    public function login()
    {
    	$this->load->view('Login');
    }

    public function verifyLogin()
    {
    	$data = array(
            'EmailId' => $this->input->post('email'),
            'password' => $this->input->post('password')
    	);

    	$userDetails = $this->Home_model->verifyUser($data);

    	if ($userDetails) {
    		$this->session->set_userdata(array(
    			'name' => $userDetails->emp_name,
    			'email' => $userDetails->EmailId,
    			'logged_in' => TRUE
    		));
    		redirect(base_url().'home');
    		
    	} else {
    		$this->session->set_flashdata('message', 'invalid username or password');
    		redirect(base_url().'login');
    	}
    }

    public function logout() {
    	$array_items = array('name','email','logged_in');

		$this->session->unset_userdata($array_items);

		$this->session->sess_destroy();
		redirect(base_url().'login');
    }

    public function forgotPasswordView() {
        $this->load->view('forgotpasswordview');
    }

    public function forgotPasswordSendMail() {
        $data = array(
            'EmailId' => $this->input->post('email')
        );

        $time = time();
        $email = $this->input->post('email');

        $userDetails = $this->Home_model->verifyUser($data);

        if ($userDetails) {
            $fPData = array(
                'email' => $email,
                'timestamp' => $time
            );
            $this->Home_model->forgotPasswordSave($fPData);
            $modifiedEmail = str_replace('@',"_", $email);
            // $this->session->set_flashdata('info','Email sent successfully.');
            $url = base_url()."verifyFPLink/".$modifiedEmail."/".$time;
            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => '465',
                'smtp_user' => 'user Email',
                'smtp_pass' => 'password',
                'mailtype'  => 'html',
                'charset'   => 'iso-8859-1',
                'wordwrap'  => 'TRUE',

            );

            $emailBody = "<!DOCTYPE html>
                            <html>
                            <body>

                            <a href='".$url."'>Click here to change your password</a>

                            </body>
                            </html>";

            $this->load->library('email', $config);
            $this->email->from('nakodashri@gmail.com', 'admin');
            $this->email->to($email);
            $this->email->subject('Password Change Request');
            $this->email->message($emailBody);
            $this->email->set_newline("\r\n");
            $result = $this->email->send();
            if ($result) {
                $this->session->set_flashdata('message', 'Email sent successfully.');
                redirect(base_url().'login');
            } else {
                $this->session->set_flashdata('message', 'Error occured while sending email.');
                redirect(base_url().'forgot-password');
            }
            
        }
        else {
            $this->session->set_flashdata('message', 'Email Not Registered');
            redirect(base_url().'forgot-password');
        }
    }

    public function verifyFPLink($email, $timestamp) {
        $email = str_replace("_","@",$email);
        $data = array(
            'EmailId' => $email
        );
        $userDetails = $this->Home_model->verifyUser($data);
        if ($userDetails) {
            $isValidLink = $this->Home_model->verifyForgotPassLink($email, $timestamp);
            // print_r($isValidLink);
            // die();
            switch ($isValidLink) {
                case 1:
                    $this->load->view('changepasswordview', $data);
                    break;
                case 2:
                    
                    $this->session->set_flashdata('message', 'link invalid or expired');
                    redirect(base_url().'login');
                    break;
                case 3:
                    $this->session->set_flashdata('message', 'link invalid or expired');
                    redirect(base_url().'login');
                    break;
                
                default:
                    $this->session->set_flashdata('message', 'Unknown error occured');
                    redirect(base_url().'login');
                    break;
            }
        } else {
            $this->session->set_flashdata('message', 'User not verifed');
            redirect(base_url().'login');
        }
    }

    public function saveNewPassword() {
        $emailData = array(
            'EmailId' => $this->input->post('email')
        );
        $userDetails = $this->Home_model->verifyUser($emailData);
        if ($userDetails) {
            $email = $this->input->post('email');
            $newpassword = array('password' => $this->input->post('password') );
            $saved = $this->Home_model->saveNewPassword($emailData, $newpassword);
            if ($saved > 0) {
                $this->session->set_flashdata('message', 'Password updated successfully');
                redirect(base_url().'login');
            } else {
                $this->session->set_flashdata('message', 'Error Occured while updating password. Please try again later.');
                redirect(base_url().'login');
            }
        } else {
            $this->session->set_flashdata('message', 'Error Occured while updating password. Please try again later.');
            redirect(base_url().'login');
        }
    }

}
?>