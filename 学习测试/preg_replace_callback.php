<?php
function yunsuan($matches){
    $a = (int)$matches[1];
    $op = $matches[2];
    $b = (int)$matches[3];
    switch($op){
        case  '+':
            return $a +$b;
        case  '-':
            return $a -$b;
        case  '*':
            return $a *$b;
        case  '/':
            return $a / $b;
    }
}
$subect = "2+3=? 5*4= ?";
$result = preg_replace_callback(
    '/(\d+)([+\-*\/])(\d+)/',
    'yunsuan',
    $subect

);
echo $result;




//$text = "2+3=? 5*4=?";
//$result = preg_replace_callback(
//    '/(\d+)([+\-*\/])(\d+)/',  // 匹配简单数学表达式
//    function($matches) {
//        $a = (int)$matches[1];
//        $op = $matches[2];
//        $b = (int)$matches[3];
//
//        switch ($op) {
//            case '+': return $a + $b;
//            case '-': return $a - $b;
//            case '*': return $a * $b;
//            case '/': return $a / $b;
//        }
//    },
//    $text
//);
// 输出：2+3=5 5*4=20

