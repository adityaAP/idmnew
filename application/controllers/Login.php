<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_login');
    } 

	public function index()
	{
		if ($this->input->post()) {
			 	$email = $this->input->post("email", TRUE);
                $password = MD5($this->input->post('password', TRUE));
       			$checking = $this->model_login->check_login('tb_user', array('email' => $email), array('password' => $password));
       	if ($checking != FALSE) {
                    foreach ($checking as $apps) {	
                        $rule = $apps->rule;
                        $session_data = array(
                            'user_id'   => $apps->user_id,
                            'email'     => $apps->email,
                            'nama'      => $apps->nama,
                            'rule'      => $apps->rule,
							'logged_in' => TRUE                            
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);
                        redirect('admin/');
                    }
                }else{
				        $this->session->set_flashdata('login',TRUE);
                        $this->session->set_flashdata('danger','email atau password anda salah');	
                                    }
                                }

                $this->load->view('login');
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login','refresh');
    }  
}
