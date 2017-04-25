<?php
class M_admin extends CI_Model{
    function booking(){
        $this->db->select('*');
        $this->db->from('movie');
        $this->db->join('book_ticket', 'movie.id_movie = book_ticket.id_movie');
        $this->db->order_by("book_ticket.id_book", "asc");
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			foreach($query->result_array() as $y){
                $hasil_array[]=$y;
			}
			return $hasil_array;
		}
		else {
			return FALSE;
		}
    }
    
    public function update_booking($id_book){
        $sql = "UPDATE book_ticket SET status = 'Payed' WHERE id_book = ".$id_book."";
        return $this->db->query($sql);      
    }
    
    function check_user($user, $pass){
            $query = $this->db->get_where('admin', array('username' => $user, 'password' => $pass));
            return $query->num_rows();
        }
}