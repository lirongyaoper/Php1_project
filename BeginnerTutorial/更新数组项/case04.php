<?php
/*
lirongyaoper.com
请与case03中的代码作比较
--荣耀科技
 */
$cars = array("Volvo", "BMW", "Audi");
foreach ($cars as &$x) {
    $x = "Ford";
}

$x = "ice cream";

var_dump($cars);



//array(3) {
//    [0]=>
//  string(4) "Ford"
//    [1]=>
//  string(4) "Ford"
//    [2]=>
//  &string(9) "ice cream"
//}
