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


//case01
//function myfunction($v){
//    return $v * $v;
//}
//
//$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
//
//print_r(array_map("myfunction",$a));


//case02

function myfunction1($v){
    if($v =="Dog") return "Fido";
    return $v;
}

$a = array("Horse","Dog","Cat");
print_r(array_map("myfunction1",$a));



//case03
function myfunction3($v1,$v2){
    if($v1 === $v2)   return "same";
    return "different";
}

$a1=array("Horse","Dog","Cat");
$a2=array("Cow","Dog","Rat");

print_r(array_map("myfunction3",$a1,$a2));