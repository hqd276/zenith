<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends MX_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index($page = null){
		$this->load->model('admin/modelcategory');

		$categories = $this->modelcategory->getCategories();

		$data = array();

		$cat_news_events = array();
		$cat_blog = array();

		foreach ($categories as $key => $value) {
			if ($value['type'] == 0) {
				$cat_news_events[] = $value;
			}elseif($value['type'] == 3) {
				$cat_blog[] = $value;
			}
		}
		$data['cat_news_events'] = $cat_news_events;
		$data['cat_blog'] = $cat_blog;
		$data['page'] = $page;
		return $data;

		// $this->template->load_view('header',$data);

		// $this->template->build('header',$data);
	}
	
}