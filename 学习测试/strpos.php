<?php
/**
 * @file     ${NAME}
 * @author   lirongyao0916
 * @date     7/4/25
 * @version  1.0
 * @copyright  2025 lirongyaoper.com. All rights reserved.
 *
 * @description
 * 荣耀科技
 */

$email = "user@example.com";
$atPos = strpos($email, "@");  // 返回4
var_dump($atPos);

$http = "https://lirongyaoper.com";
if(strpos($http,"https") ===0){
    echo "安全连接";
}



$text = "This is a sample text";
$search = ["sample", "test"];
foreach ($search as $word) {
    if (strpos($text, $word) !== false) {
        echo "Found $word";
    }
}


$str = "abc abc abc";
$pos = strpos($str, "abc", 5);
var_dump($pos);