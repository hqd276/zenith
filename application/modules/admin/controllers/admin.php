<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->template->set_partial('header','header');
		$this->template->set_partial('footer','footer');
	}
	
	public function index(){

		$data['user'] = $this->session->userdata('user'); 
		if ($data['user']['id']){
			$this->template->set_layout('admin')->build('admin',$data);
		}else{
			redirect(base_url('login'));
		}
	}
}
