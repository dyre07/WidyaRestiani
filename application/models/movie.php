<?php
class Movie extends CI_Model{
    function get_movie(){
        $query = $this->db->get('movie');
        return $query->result_array();
    }
    
    function detail_movie($id_movie){
       return $this->db->get_where('movie',array('id_movie'=> $id_movie))->row();
    }
    
    function comment($id_movie){
        $this->db->select('*');
        $this->db->from('movie');
        $this->db->join('user_comment', 'movie.id_movie = user_comment.id_movie');
        $this->db->join('registered_user', 'user_comment.id_customer = registered_user.id_customer');
        $this->db->where('user_comment.id_movie', $id_movie);
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
    
    public function booking($data){
		return $this->db->insert('book_ticket', $data);
	}
    
    public function add_comment($data){
		return $this->db->insert('user_comment', $data);
	}
    
    function total_cart(){
       $id_customer = $this->session->userdata('id_customer');
       $query = $this->db->get_where('book_ticket', array('id_customer'=> $id_customer, 'status' => 'booked'));
       return $query->num_rows();
    }
    
    function total_pay(){
        $id_customer = $this->session->userdata('id_customer');
        $query = $this->db->get_where('book_ticket', array('id_customer'=> $id_customer, 'status' => 'booked'));
        return $query->result_array();
    }
    
    function cart(){
        $id_customer = $this->session->userdata('id_customer');
        $this->db->select('*');
        $this->db->from('movie');
        $this->db->join('book_ticket', 'movie.id_movie = book_ticket.id_movie');
        $this->db->where('book_ticket.id_customer', $id_customer);
        $this->db->where('book_ticket.status', 'booked');
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
    
    public function delete($id_book){
        return $this->db->delete('book_ticket', array('id_book' => $id_book));
    }
    
    public function payment_detail($id_book){
        $this->db->select('*');
        $this->db->from('book_ticket');
        $this->db->join('movie', 'book_ticket.id_movie = movie.id_movie', 'inner');
        $this->db->where('book_ticket.id_book', $id_book);
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
    
    public function payment($data){
		return $this->db->insert('make_payment', $data);
	}
    
    public function update_kuota($id_movie, $qty){
        $sql = "UPDATE movie SET quota = quota - ".$qty." WHERE id_movie = ".$id_movie."";
        return $this->db->query($sql);
    }
    
    public function update_booking($id_book){
        $sql = "UPDATE book_ticket SET status = 'waiting' WHERE id_book = ".$id_book."";
        return $this->db->query($sql);      
    }
    
    public function capek($id_movie){
		return $this->db->get_where('book_ticket',array('id_movie'=> $id_movie, 'id_customer' => $this->session->userdata('id_customer'), 'status' => 'payed'))->num_rows();
	}
    
    public function update_user($data){
        $id_user = $this->session->userdata('id_customer');
        
        $this->db->where('id_customer', $id_user);
		$this->db->update('registered_user', $data);
	}
    
    function done(){
        $id_customer = $this->session->userdata('id_customer');
        $this->db->select('*');
        $this->db->from('movie');
        $this->db->join('book_ticket', 'movie.id_movie = book_ticket.id_movie');
        $this->db->where('book_ticket.id_customer', $id_customer);
        $this->db->where('book_ticket.status', 'payed');
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
}