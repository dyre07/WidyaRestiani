<?php
class User_model extends CI_Model{
    
    function check_user($email, $pass){
            $query = $this->db->get_where('registered_user', array('email' => $email, 'password' => md5($pass)));
            return $query->num_rows();
        }
    
    function get_user($email, $pass){
            $query = $this->db->get_where('registered_user', array('email' => $email, 'password' => md5($pass)));
            return $query->result_array();
        }
    
    public function insert_user($data){
		$this->db->insert('registered_user',$data);
	}
}