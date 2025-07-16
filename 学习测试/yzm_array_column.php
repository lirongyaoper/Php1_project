<?php
include "pacmd.php";
$arry=array (
    0 => 
    array (
      'modelid' => 1,
      'siteid' => 0,
      'name' => '文章模型',
      'tablename' => 'article',
      'alias' => 'article',
      'description' => '文章模型',
      'setting' => '',
      'inputtime' => 1466393786,
      'items' => 0,
      'disabled' => 0,
      'type' => 0,
      'sort' => 0,
      'issystem' => 1,
      'isdefault' => 1,
    ),
    1 => 
    array (
      'modelid' => 2,
      'siteid' => 0,
      'name' => '产品模型',
      'tablename' => 'product',
      'alias' => 'product',
      'description' => '产品模型',
      'setting' => '',
      'inputtime' => 1466393786,
      'items' => 0,
      'disabled' => 0,
      'type' => 0,
      'sort' => 0,
      'issystem' => 1,
      'isdefault' => 0,
    ),
    2 => 
    array (
      'modelid' => 3,
      'siteid' => 0,
      'name' => '下载模型',
      'tablename' => 'download',
      'alias' => 'download',
      'description' => '下载模型',
      'setting' => '',
      'inputtime' => 1466393786,
      'items' => 0,
      'disabled' => 0,
      'type' => 0,
      'sort' => 0,
      'issystem' => 1,
      'isdefault' => 0,
    ),
);
function yzm_array_column($array, $column_key, $index_key = null){
    $result = array();
	foreach ($array as $key => $value) {
		if(!is_array($value)) continue;
        if($column_key){
        	if(!isset($value[$column_key])) continue;
        	$tmp = $value[$column_key];
        }else{
        	$tmp = $value;
        }
        if ($index_key) {
        	$key = isset($value[$index_key]) ? $value[$index_key] : $key;
        }
        $result[$key] = $tmp;
    }
    return $result;
}

$result = yzm_array_column($arry,'tablename','modelid');

pacmd($result);

