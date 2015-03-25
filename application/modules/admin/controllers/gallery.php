<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MX_Controller{
	public function __construct(){
		parent::__construct();
		$this->template->set_partial('header','admin-header');
		$this->template->set_partial('footer','admin-footer');

		$user = $this->session->userdata('user'); 
		if ($user['id']){
			#Tải model 
			$this->load->model(array('modelgallery'));

			$this->template->set('user',$user);
		}else{
			redirect(base_url('login'));
		}
		$this->template->set_layout('admin');
	}
	
	public function index($page = 1){
		$data = array();

		$item_per_page = 1;
		$begin = 0;
		if ($page>1) {
			$begin = ($page-1) * $item_per_page ;
		}

		$gallery = $this->modelgallery->getGallery(null," LIMIT ".$begin.",".($item_per_page+1));
		// if (count($gallery)>0) {
		// 	foreach ($gallery as $key => $value) {
		// 		# code...
		// 	}
		// }

		if (count($gallery)>$item_per_page){
			$data['next'] = $page + 1;
			array_pop($gallery);
		}else 
			$data['next'] = 0;
		
		$data['prev'] = $page - 1;

		$data['list'] = $gallery;

		$this->template->build('listgallery',$data);
	}

	public function add(){
		$data = array();
		$data['title'] = "Add new Image";

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util')); 

		$dataC = array('title' =>'',
						'image' =>'',
						'order' =>'',
						'status' =>'');
		
		if ($this->input->post('submit') == "ok") {
			$dataC['title'] = $this->input->post('title'); 
			$dataC['order'] = $this->input->post('order'); 

			if ($this->input->post('status'))
				$dataC['status'] = 1;
			else 
				$dataC['status'] = 0;
			$data['b_Check']= false;

			if (!empty ($_FILES['image'])) {
				$this->load->model(array('Mgallery'));
				$image_data = $this->Mgallery->do_upload("/gallery/");
				if ($image_data) {
					$dataC['image'] = $image_data["file_name"];
					if ($this->modelgallery->insertImage($dataC)){
						$data['b_Check']= true;
						// redirect(base_url('list-category/'.$type));
					}
				}
			}
		}


		$data['item'] = $dataC;
		$this->template->build('addgallery',$data);
	}

	public function delete($id=0){
		$this->db->delete('gallery', array('id' => $id)); 
		redirect(base_url('/admin/gallery'));
	}
}
