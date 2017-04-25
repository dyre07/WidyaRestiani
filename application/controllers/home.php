<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['total'] = $this->movie->total_cart();
        $data['movie'] = $this->movie->get_movie();
        
		$this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer');
	}
    
    public function detail_movie($id_movie = NULL)
	{
        $data['detail'] = $this->movie->detail_movie($id_movie);
        $data['comment'] = $this->movie->comment($id_movie);
        $data['total'] = $this->movie->total_cart();
        $data['num_rows'] = $this->movie->capek($id_movie);
        
		$this->load->view('header', $data);
        $this->load->view('detail', $data);
        $this->load->view('footer');
	}
    
    public function pay(){
        $data['total'] = $this->movie->total_cart();
        $data['total_pay'] = $this->movie->total_pay();
        
        $this->load->view('header', $data);
        $this->load->view('pay');
        $this->load->view('footer');
    }
    
    public function booking(){
        $price = $this->uri->segment(4);
        $qty = $this->input->post('qty');
        $div = $price * $qty;
            $data = array(
                'id_customer' => $this->session->userdata('id_customer'),
                'id_movie' => $this->uri->segment(3),
                'date' => $this->input->post('date'),
                'time' => $this->input->post('time'),
                'qty' => $qty,
                'pay' => $div,
                'status' => 'booked'
            );
        
        $this->movie->booking($data);
        redirect(base_url('home/pay/').$div);
    }
    
    public function add_comment($id_movie = NULL){
        
        if($this->session->userdata('login') == TRUE){
            $data = array(
                'id_movie' => $id_movie,
                'id_customer' => $this->session->userdata('id_customer'),
                'comment' => $this->input->post('comment')
            );
             $this->movie->add_comment($data);
            echo "<script>
                    window.location.href='".base_url('home')."';
                    alert('Adding Comment Success');
                 </script>";
            
        }else{
            echo "<script>
                    window.location.href='".base_url('user')."';
                    alert('Please Login First');
                 </script>";
        }
    }
    
    public function detail_user(){
        $data['total'] = $this->movie->total_cart();
        $data['cart'] = $this->movie->cart();
        
        $this->load->view('header',$data);
        $this->load->view('user_booking', $data);
        $this->load->view('footer');
    }
    
    public function delete($id_book = NULL){
		$this->movie->delete($id_book);
		redirect(base_url('home/detail_user'));
	}
    
    public function book(){
        if($this->session->userdata('login') == TRUE){
            
            $data['total'] = $this->movie->total_cart();
        
            $this->load->view('header',$data);
            $this->load->view('booking');
            $this->load->view('footer');
        }else{
            echo "<script>
                    window.location.href='".base_url('user')."';
                    alert('Please Login First');
                 </script>";
        }
    }
    
    public function confirm_payment($id_book = NULL){
        $data['total'] = $this->movie->total_cart();
        $data['confirm'] = $this->movie->payment_detail($id_book);
        
        $this->load->view('header',$data);
        $this->load->view('confirm', $data);
        $this->load->view('footer');
    }
    
    public function payment_proses($id_book = NULL){
        $qty = $this->input->post('qty');
        $id_movie = $this->input->post('id_movie');
        $data = array(
            'id_customer' => $this->session->userdata('id_customer'),
            'id_book' => $id_book,
            'amount' => $this->input->post('total'),
            'name' => $this->input->post('name'),
            'card_number' => $this->input->post('card_number')
        );
        
        $this->movie->update_booking($id_book);
        $this->movie->update_kuota($id_movie, $qty);
        $this->movie->payment($data);
        
        echo "<script>
                    window.location.href='".base_url('home/detail_user')."';
                    alert('Thank You, our admin will check your payment');
                 </script>";
    }
    
    public function user(){
        $data['total'] = $this->movie->total_cart();
        
        $this->load->view('header', $data);
        $this->load->view('detail_user');
        $this->load->view('footer');
    }
    
    public function update_user(){
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );
        $this->movie->update_user($data);
        echo "<script>
                    window.location.href='".base_url('home/user')."';
                    alert('Update Account Success');
                 </script>";
    }
    
    public function booking_history(){
        $data['done'] = $this->movie->done();
        $data['total'] = $this->movie->total_cart();
        
        $this->load->view('header',$data);
        $this->load->view('booking_history', $data);
        $this->load->view('footer');
    }
}
