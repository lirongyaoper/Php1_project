<?php
// explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
$str = "apple,banana,orange";
$fruits = explode(",", $str);
var_dump($fruits);