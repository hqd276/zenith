<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->template->set_partial('header','admin-header');
		$this->template->set_partial('footer','admin-footer');

		$user = $this->session->userdata('user'); 
		if ($user['id']){
			#Tải model 
			$this->load->model(array('modelsupport'));

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
		
		$listsupport = $this->modelsupport->getSupports($begin,$item_per_page+1);
		
		if (count($listsupport)>$item_per_page){
			$data['next'] = $page + 1;
			array_pop($listsupport);
		}else 
			$data['next'] = 0;

		$data['prev'] = $page - 1;

		$data['list'] = $listsupport;

		$this->template->build('listsupport',$data);
	}
	public function delete($id=0){
		$this->db->delete('supports', array('id' => $id)); 
		redirect(base_url('/admin/support'));
	}
}
