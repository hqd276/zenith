<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_controller {
	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model(array('model'));

		$this->template->set_partial('header','header');
		$this->template->set_partial('footer','footer');
	}
	
	public function index(){
		$data = array();
		$data['page'] = 'contact';

		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email'); 
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[10]'); 

		#Kiểm tra điều kiện validate 
		if($this->form_validation->run() == TRUE){ 
			$data['email'] = $this->input->post('email'); 
			$data['phone'] = $this->input->post('phone'); 
			$data['content'] = $this->input->post('content'); 

			if ($this->model->insertSupport($data)){
				$data['b_Check']= true;
			}else{
				$data['b_Check']= false;
			}
			
		} 

		 
		$this->template->build('contact',$data);
	}
	
}