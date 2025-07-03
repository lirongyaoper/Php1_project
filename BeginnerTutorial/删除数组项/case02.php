<?php
/**
 * @file     ${NAME}
 * @author   lirongyao0916
 * @date     7/3/25
 * @version  1.0
 * @copyright  2025 lirongyaoper.com. All rights reserved.
 *
 * @description
 * 荣耀科技
 */

//使用 unset 函数
//
//您还可以使用 unset() 函数来删除现有的数组项。
//
//注意：unset() 函数不会重新排列索引，这意味着在删除后，数组将不再包含缺失的索引。
$cars = array("bvilve","bmw","tesla","jiefang","dongfeng","qirui","shangqi");
unset($cars[0]);
var_dump($cars);
