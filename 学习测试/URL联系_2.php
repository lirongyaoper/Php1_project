<?php
$request_uri = '/products/42';
if (preg_match('/^\/products\/(\d+)$/', $request_uri, $matches)) {
    $product_id = $matches[1];
    echo "匹配";
}else{
    echo "不匹配";
}