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

//要从数组中删除现有项，您可以使用 array_splice() 函数。
//
//使用 array_splice() 函数时，您需要指定索引（从哪里开始）以及要删除的项目数量。

$cars = array("bvilve","bmw","tesla","jiefang","dongfeng","qirui","shangqi");
array_splice($cars,1,1);
var_dump($cars);