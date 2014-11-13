<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->template->set_partial('header','admin-header');
		$this->template->set_partial('footer','admin-footer');

		$user = $this->session->userdata('user'); 
		if ($user['id']){
			#Tải model 
			$this->load->model(array('modelcategory'));

			$this->template->set('user',$user);
		}else{
			redirect(base_url('login'));
		}

		$this->template->set_layout('admin');
	}
	
	public function index($type=0){
		$data = array();
		$data['type'] = $type;

		$category = $this->modelcategory->getCategories($type,0,10);
		if (count($category)>0) {
			foreach ($category as $key => $value) {
				# code...
			}
		}
		$data['list'] = $category;
		// var_dump($data['list']);die;

		$this->template->build('listcategory',$data);
	}

	public function add($type=0){
		$data = array();
		$data['title'] = "Add new category";
		$category = $this->modelcategory->getAllCategories($type);
		$data['category'] = $category;

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[5]'); 

		#Kiểm tra điều kiện validate 
		if($this->form_validation->run() == TRUE){ 
			$dataC['name'] = $this->input->post('name'); 
			$dataC['image'] = $this->input->post('image'); 
			$dataC['parent'] = $this->input->post('parent'); 
			$dataC['description'] = $this->input->post('description'); 
			// if ($this->input->post('status'))
			// 	$dataC['status'] = 1;
			// else 
			// 	$dataC['status'] = 0;
			$dataC['status'] = $this->input->post('status'); 
			$dataC['type'] = $type; 
			var_dump($dataC);
			// if ($this->modelcategory->insertCategory($dataC)){
			// 	$data['b_Check']= true;
			// }else{
			// 	$data['b_Check']= false;
			// }
		} 

		$this->template->build('addcategory',$data);
	}
	public function edit($type=0,$id=0){
		$data = array();
		if ($id<=0)
			redirect(base_url('list-category/'.$type));

		$data['title'] = "Edit category";

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->library(array('form_validation'));

		$this->template->build('addcategory',$data);
	}
}
