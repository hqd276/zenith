<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller{
	
	public function __construct(){
		parent::__construct();

		$this->template->set_partial('header','header');
		$this->template->set_partial('footer','footer');
	}
	
	public function index(){
		$data = array();
		$data['page'] = 'about';
		
		$this->template->build('about',$data);
	}
	
}
