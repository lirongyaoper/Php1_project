<?php
$pathinfo = "/product/42";
$reg = '/^\/product\/(\d+)$/';
$v = 'product.php?id=$1';
echo preg_replace($reg, $v, $pathinfo);