<?php
$cars = array("Volvo", "BMW", "Audi");
foreach ($cars as &$x) {
    $x = "Ford";
}
unset($x);
var_dump($cars);