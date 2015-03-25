<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->template->set_partial('header','admin-header');
		$this->template->set_partial('footer','admin-footer');

		$user = $this->session->userdata('user'); 
		if ($user['id']){
			#Tải model 
			$this->load->model(array('modelbooking'));

			$this->template->set('user',$user);
		}else{
			redirect(base_url('login'));
		}

		$this->template->set_layout('admin');
	}
	
	public function index($page = 1){
		$data = array();

		$item_per_page = 10;
		$begin = 0;
		if ($page>1) {
			$begin = ($page-1) * $item_per_page - 1;
		}

		$listbooking = $this->modelbooking->getBookings($begin,$item_per_page +1);
		
		if (count($listbooking)>$item_per_page){
			$data['next'] = $page + 1;
			array_pop($listbooking);
		}else 
			$data['next'] = 0;

		$data['prev'] = $page - 1;

		$data['list'] = $listbooking;

		$this->template->build('listbooking',$data);
	}
	public function delete($id=0){
		$this->db->delete('booking', array('id' => $id)); 
		redirect(base_url('/admin/booking'));
	}
}
