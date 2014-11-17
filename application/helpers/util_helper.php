<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('add_array_key'))
{
	function add_array_key($field, $array)
	{
		$data = array();
		foreach ($array as $key => $value) {
			$data[$value[$field]] = $value;
		}

		return $data;
	}
}

?>