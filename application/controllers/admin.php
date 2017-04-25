<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
            $this->load->view('admin_login'); 
	}
    
    public function confirm($id_book = NULL)
	{
        $this->m_admin->update_booking($id_book);
        echo "<script>
                    window.location.href='".base_url('admin/data')."';
                    alert('Confirm Success');
                 </script>";
	}
    
    public function data(){
        $data['booking'] = $this->m_admin->booking();
        $this->load->view('admin', $data);
    }
    
    public function login(){
        $user = $this->input->post('username');
        $pass = $this->input->post('pass');
        $num_rows = $this->m_admin->check_user($user, $pass);
        //echo $numrows;
        if($num_rows==1){
            $ses = array('user' => $user, 'login' => TRUE );
            $this->session->set_userdata($ses);
            echo "<script>
                    window.location.href='".base_url('admin/data')."';
                    alert('Login Success');
                 </script>";
        }else{
            echo "<script>
                    window.location.href='".base_url('admin')."';
                    alert('Login Failed, Wrong Username or Password');
                 </script>";
        }
    }
}
