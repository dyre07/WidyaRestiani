<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
        if($this->session->userdata('login') == FALSE){
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer'); 
        }else{
            echo "<script>
                    window.location.href='".base_url('home')."';
                    alert('Already Login');
                 </script>";
        }
		
	}
    
    public function login_proses(){
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $num_rows = $this->user_model->check_user($email, $pass);
        
        if($num_rows==1){
            $data['user'] = $this->user_model->get_user($email, $pass);
            $ses = array(
                'id_customer' => $data['user'][0]['id_customer'],
				'name' => $data['user'][0]['name'],
				'address' => $data['user'][0]['address'],
				'email' => $data['user'][0]['email'],
				'password' => $data['user'][0]['password'],
				'login' => TRUE
            );
            $this->session->set_userdata($ses);
            echo "<script>
                    window.location.href='".base_url('home')."';
                    alert('Login Success');
                 </script>";
        }else{
            echo "<script>
                    window.location.href='".base_url('user')."';
                    alert('Login Failed, Wrong Username or Password');
                 </script>";
        }
    }
    
    public function register(){
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }
    
    public function add_register(){
        $pass = $this->input->post('pass');
	    $data=array(
			  'name' => $this->input->post('name'),
		      'address' => $this->input->post('address'),
              'email' => $this->input->post('email'),
              'password' => md5($pass)			
		);
		
		$this->user_model->insert_user($data);
		redirect(base_url('user'));
	}
    
    function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}
