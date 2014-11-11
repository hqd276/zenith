<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ModelCategory extends CI_Model{ 
	private $_name = 'categories';
	function __construct(){ 
		parent::__construct(); 
	} 

	function getCategories($type,$begin,$limit) {
		$query = $this->db->where('type',$type)->get($this->_name, $limit, $begin);
		return $query->result();
	}

}