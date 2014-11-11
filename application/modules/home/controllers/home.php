<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	
	public function __construct(){
		parent::__construct();

		$this->template->set_partial('header','header',array('page'=>'home'));
		$this->template->set_partial('footer','footer');
	}
	
	public function index(){
		$this->template->build('home');
	}
	
}
