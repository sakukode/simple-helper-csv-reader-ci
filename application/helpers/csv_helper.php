<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('csv_find_all'))
{
function csv_find_all($path_file)
{
	$result = array_map('str_getcsv', file($path_file));

	if(count($result) > 0) {
		return $result;
	} else {
		return null;
	}
}
}

if ( ! function_exists('csv_find_by'))
{
function csv_find_by($path_file,$column,$key)
{
	$data = csv_find_all($path_file);

	$result = array();

	foreach($data as $row) {
   		if($row[$column] == $key) {		
   	 		$result[] = $row;
   		}
	}

	return $result;	
}

}

if ( ! function_exists('csv_count_all'))
{
function csv_count_all($path_file)
{
	$data = csv_find_all($path_file);

	$total = count($data);

	return $total;
}

}

if ( ! function_exists('csv_count_by'))
{
function csv_count_by($path_file,$column,$key)
{
	$data = csv_find_by($path_file,$column,$key);

	$total = count($data);

	return $total;
}

}