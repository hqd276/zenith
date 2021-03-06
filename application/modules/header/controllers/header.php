<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends MX_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index($page = null){
		$this->load->model('admin/modelcategory');

		$categories = $this->modelcategory->getCategories();

		$data = array();

		$this->load->model(array('admin/modelsetting'));
		$this->load->helper(array('util')); 

		$setting = $this->modelsetting->getSetting(null);
		$setting = add_array_key('key',$setting);
		foreach ($setting as $key => $value) {
			$setting[$key]['data'] = json_decode($value['value']);
		}
		$data['setting'] = $setting;

		$cat_news_events = array();
		$cat_blog = array();

		foreach ($categories as $key => $value) {
			if ($value['type'] == 0) {
				$cat_news_events[] = $value;
			}elseif($value['type'] == 1) {
				$cat_destination[] = $value;
			}elseif($value['type'] == 2) {
				$cat_tour[] = $value;
			}elseif($value['type'] == 3) {
				$cat_blog[] = $value;
			}
		}
		$data['cat_destination'] = $cat_destination;
		$data['cat_news_events'] = $cat_news_events;
		$data['cat_tour'] = $cat_tour;
		$data['cat_blog'] = $cat_blog;
		$data['page'] = $page;
		$data['type'] = $value['type'];
		return $data;

		// $this->template->load_view('header',$data);

		// $this->template->build('header',$data);
	}
	
}
