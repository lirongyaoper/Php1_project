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

//向关联数组中添加多个项

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["price" =>" 50$", "color" => "Red"];
$cars+= array("chandi"=>"zhoukou");
//Output the array:
var_dump($cars);
