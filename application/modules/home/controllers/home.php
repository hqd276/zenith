<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data );
		$this->template->set_partial('footer','footer',$data );
	}
	
	public function index(){
		$data = array();

		$this->load->model('admin/modelnews');
		$list_news = $this->modelnews->getNews(array('home_news'=>1),' LIMIT 0,5');
		$data['list_news'] = $list_news;

		$this->template->build('home',$data);
	}
}
